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
        '/user' => [[['_route' => 'app_user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/user/new' => [[['_route' => 'app_user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'dashboard', '_controller' => 'App\\Controller\\VinylController::homepage'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/equipments/(?'
                    .'|category/([^/]++)(*:74)'
                    .'|([^/]++)(*:89)'
                    .'|api/([^/]++)/(?'
                        .'|edit(*:116)'
                        .'|assign(*:130)'
                        .'|unassign(*:146)'
                    .')'
                    .'|([^/]++)(*:163)'
                    .'|user/([^/]++)(*:184)'
                .')'
                .'|/movies/(?'
                    .'|edit/([^/]++)(*:217)'
                    .'|([^/]++)(*:233)'
                .')'
                .'|/user/([^/]++)(?'
                    .'|(*:259)'
                    .'|/e(?'
                        .'|dit(*:275)'
                        .'|quipment(*:291)'
                    .')'
                .')'
                .'|/browse(?:/([^/]++))?(*:322)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        74 => [[['_route' => 'app_equipment_filter_by_category', '_controller' => 'App\\Controller\\EquipmentController::filterByCategory'], ['category'], ['GET' => 0], null, false, true, null]],
        89 => [[['_route' => 'app_equipment_show', '_controller' => 'App\\Controller\\EquipmentController::show'], ['equipment'], ['GET' => 0], null, false, true, null]],
        116 => [[['_route' => 'app_equipment_edit', '_controller' => 'App\\Controller\\EquipmentController::edit'], ['equipment'], ['POST' => 0, 'PATCH' => 1], null, false, false, null]],
        130 => [[['_route' => 'app_equipment_assign', '_controller' => 'App\\Controller\\EquipmentController::assign'], ['equipment'], ['POST' => 0, 'PATCH' => 1], null, false, false, null]],
        146 => [[['_route' => 'app_equipment_unassign', '_controller' => 'App\\Controller\\EquipmentController::unAssign'], ['equipment'], ['GET' => 0], null, false, false, null]],
        163 => [[['_route' => 'app_equipment_delete', '_controller' => 'App\\Controller\\EquipmentController::delete'], ['id'], ['DELETE' => 0, 'POST' => 1], null, false, true, null]],
        184 => [[['_route' => 'app_equipment_filterbyuser', '_controller' => 'App\\Controller\\EquipmentController::filterByUser'], ['id'], ['GET' => 0], null, false, true, null]],
        217 => [[['_route' => 'editMovie', '_controller' => 'App\\Controller\\MoviesController::edit'], ['movie'], null, null, false, true, null]],
        233 => [[['_route' => 'app_movies_show', '_controller' => 'App\\Controller\\MoviesController::show'], ['movie'], null, null, false, true, null]],
        259 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        275 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        291 => [[['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::getUserEquipment'], ['id'], ['GET' => 0], null, false, false, null]],
        322 => [
            [['_route' => 'app_vinyl_browse', 'name' => null, '_controller' => 'App\\Controller\\VinylController::Browse'], ['name'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
