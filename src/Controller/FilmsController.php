<?php

namespace App\Controller;

use App\Form\FileUploadType;
use App\Form\FilmsType;
use App\Service\FileUploader;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Films;
use aharen\OMDbAPI;
use League\Csv\Reader;


class FilmsController extends AbstractController{

    // add film to DB
    public function createFilms(Request $request, EntityManagerInterface $entityManager): ?Response{
        $film = new Films();
        $form = $this->createForm(FilmsType::class, $film);
        $apiKey = '121c13b3'; // clé API

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            $url = "http://www.omdbapi.com/?apikey=" . $apiKey . "&t=" . $film->getName();
            $response = file_get_contents($url);
            if(!isset(json_decode($response,true)["Plot"])){ // verify if the film exists
                return new Response("Le film que vous avez essayé d'ajouter n'existe pas.");
            }else{
                $plot = json_decode($response,true)["Plot"];
                $film->setDescription($plot);
                $film->setVotersNumber(1);
                $entityManager->persist($film);
                $entityManager->flush();
            }
        }
        return $this->render('ajoutFilm.html.twig', [
            'form' => $form->createView()
        ]);
    }

    // display films
    public function printFilms(Request $request, ManagerRegistry $doctrine)
    {
        $entityManager = $doctrine->getManager();

        $films = $entityManager->getRepository(Films::class)->findBy([], ['score' => 'desc', 'name' => 'asc']);

        return $this->render('listeFilms.html.twig', [
                'films' => $films
        ]);
    }

    // detail page for each film
    public function detailsFilm(ManagerRegistry $doctrine,$id,Request $request){
        $entityManager = $doctrine->getManager();
        $film = $entityManager->getRepository(Films::class)->find($id);

        $form = $this->createFormBuilder()
            ->add('password', TextType::class)
            ->add('submitForm', SubmitType::class, ['label'=>'delete film '])
            ->getForm()
        ;

        $form ->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $data=$form->getData();
            if($data['password']==$this->getParameter('app.pwd')) // get the admin pwd from parameters
            {
                $entityManager->remove($film);
                $entityManager ->flush();
                return $this->redirectToRoute('listeFilm');
            }
        }
        return $this->render('detail.html.twig', ['film' => $film, 'deleteFilm' => $form->createView()]);

    }

    // upload CSV file
    public function uploadFilms(EntityManagerInterface $entityManager,Request $request, FileUploader $fileUploader){

        $form = $this->createForm(FileUploadType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
            $file = $form['upload_file']->getData();
            if ($file)
            {
                $file_name = $fileUploader->upload($file);
                if (null !== $file_name) // for example
                {
                    $directory = $fileUploader->getTargetDirectory();
                    $full_path = $directory.'/'.$file_name;
                    $csv = Reader::createFromPath($full_path)
                        ->setHeaderOffset(0); // set the header at the beginning of the file
                    foreach($csv as $record){
                        $film = new Films();
                        $film->setName($record['name']);
                        $film->setDescription($record['description']);
                        $film->setScore((int)$record['score']);
                        $film->setVotersNumber($record['voters']);
                        $entityManager->persist($film);
                        $entityManager->flush();
                    }
                }
                else
                {
                    return new Response('Erreur lors de la lecture du fichier.');
                }
            }
        }
        return $this->render('uploadFilms.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}