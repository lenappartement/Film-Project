<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* header.html */
class __TwigTemplate_5086dc5736bb9efab7c5333ce8b0b91c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "header.html"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/film.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\">
    <title>Film</title>
</head>
<body>
<nav>
    <div class=\"nav-bg\"></div>
    <ul>
        <li><a href=\"/Homepage\">Accueil</a></li>
        <li><a href=\"/createFilms\">Ajouter un film</a></li>
        <li><a href=\"/Uploads\">Importer des films</a></li>
    </ul>
</nav>
<div class=\"banner\">
    <h1>VideoClub</h1>
</div>

</body>
</html>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 5,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <link href=\"{{ asset('css/film.css') }}\" type=\"text/css\" rel=\"stylesheet\">
    <title>Film</title>
</head>
<body>
<nav>
    <div class=\"nav-bg\"></div>
    <ul>
        <li><a href=\"/Homepage\">Accueil</a></li>
        <li><a href=\"/createFilms\">Ajouter un film</a></li>
        <li><a href=\"/Uploads\">Importer des films</a></li>
    </ul>
</nav>
<div class=\"banner\">
    <h1>VideoClub</h1>
</div>

</body>
</html>", "header.html", "/Users/lenaiglesis/Desktop/programmation/Symfony/projetFilm/templates/header.html");
    }
}
