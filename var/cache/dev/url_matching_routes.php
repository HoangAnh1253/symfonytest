<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/equipments' => [[['_route' => 'app_equipment_index', '_controller' => 'App\\Controller\\EquipmentController::index'], null, ['GET' => 0], null, true, false, null]],
        '/equipments/new' => [[['_route' => 'app_equipment_new', '_controller' => 'App\\Controller\\EquipmentController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/movie' => [[['_route' => 'app_movie', '_controller' => 'App\\Controller\\MovieController::index'], null, null, null, false, false, null]],
        '/movies' => [[['_route' => 'movies', '_controller' => 'App\\Controller\\MoviesController::index'], null, null, null, false, false, null]],
        '/movies/create' => [[['_route' => 'app_movies_create', '_controller' => 'App\\Controller\\MoviesController::create'], null, null, null, false, false, null]],
        '/show' => [[['_route' => 'old', '_controller' => 'App\\Controller\\MoviesController::show'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_vinyl_homepage', '_controller' => 'App\\Controller\\VinylController::homepage'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/equipments/([^/]++)(?'
                    .'|(*:65)'
                    .'|/edit(*:77)'
                    .'|(*:84)'
                .')'
                .'|/movies/(?'
                    .'|edit/([^/]++)(*:116)'
                    .'|([^/]++)(*:132)'
                .')'
                .'|/browse(?:/([^/]++))?(*:162)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        65 => [[['_route' => 'app_equipment_show', '_controller' => 'App\\Controller\\EquipmentController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        77 => [[['_route' => 'app_equipment_edit', '_controller' => 'App\\Controller\\EquipmentController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        84 => [[['_route' => 'app_equipment_delete', '_controller' => 'App\\Controller\\EquipmentController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        116 => [[['_route' => 'editMovie', '_controller' => 'App\\Controller\\MoviesController::edit'], ['movie'], null, null, false, true, null]],
        132 => [[['_route' => 'app_movies_show', '_controller' => 'App\\Controller\\MoviesController::show'], ['movie'], null, null, false, true, null]],
        162 => [
            [['_route' => 'app_vinyl_browse', 'name' => null, '_controller' => 'App\\Controller\\VinylController::Browse'], ['name'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
