<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/movie' => [[['_route' => 'app_movie', '_controller' => 'App\\Controller\\MovieController::index'], null, null, null, false, false, null]],
        '/movies' => [[['_route' => 'movies', '_controller' => 'App\\Controller\\MoviesController::index'], null, null, null, false, false, null]],
        '/movies/create' => [[['_route' => 'app_movies_create', '_controller' => 'App\\Controller\\MoviesController::create'], null, null, null, false, false, null]],
        '/show' => [[['_route' => 'old', '_controller' => 'App\\Controller\\MoviesController::show'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_vinyl_homepage', '_controller' => 'App\\Controller\\VinylController::homepage'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/movies/([^/]++)(*:58)'
                .'|/browse(?:/([^/]++))?(*:86)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        58 => [[['_route' => 'app_movies_show', '_controller' => 'App\\Controller\\MoviesController::show'], ['movie'], null, null, false, true, null]],
        86 => [
            [['_route' => 'app_vinyl_browse', 'name' => null, '_controller' => 'App\\Controller\\VinylController::Browse'], ['name'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
