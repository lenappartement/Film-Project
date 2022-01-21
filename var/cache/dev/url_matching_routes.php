<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/Homepage' => [[['_route' => 'listeFilm', '_controller' => 'App\\Controller\\FilmsController::printFilms'], null, null, null, false, false, null]],
        '/createFilms' => [[['_route' => 'ajoutFilm', '_controller' => 'App\\Controller\\FilmsController::createFilms'], null, null, null, false, false, null]],
        '/Uploads' => [[['_route' => 'uploadFilms', '_controller' => 'App\\Controller\\FilmsController::uploadFilms'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/Details/([^/]++)(*:59)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        59 => [
            [['_route' => 'detailsFilm', '_controller' => 'App\\Controller\\FilmsController::detailsFilm'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
