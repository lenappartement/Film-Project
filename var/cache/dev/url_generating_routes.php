<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    'listeFilm' => [[], ['_controller' => 'App\\Controller\\FilmsController::printFilms'], [], [['text', '/Homepage']], [], [], []],
    'ajoutFilm' => [[], ['_controller' => 'App\\Controller\\FilmsController::createFilms'], [], [['text', '/createFilms']], [], [], []],
    'detailsFilm' => [['id'], ['_controller' => 'App\\Controller\\FilmsController::detailsFilm'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/Details']], [], [], []],
    'uploadFilms' => [[], ['_controller' => 'App\\Controller\\FilmsController::uploadFilms'], [], [['text', '/Uploads']], [], [], []],
];
