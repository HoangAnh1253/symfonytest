<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    'app_equipment_index' => [[], ['_controller' => 'App\\Controller\\EquipmentController::index'], [], [['text', '/equipment/']], [], [], []],
    'app_equipment_new' => [[], ['_controller' => 'App\\Controller\\EquipmentController::new'], [], [['text', '/equipment/new']], [], [], []],
    'app_equipment_show' => [['id'], ['_controller' => 'App\\Controller\\EquipmentController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/equipment']], [], [], []],
    'app_equipment_edit' => [['id'], ['_controller' => 'App\\Controller\\EquipmentController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/equipment']], [], [], []],
    'app_equipment_delete' => [['id'], ['_controller' => 'App\\Controller\\EquipmentController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/equipment']], [], [], []],
    'app_movie' => [[], ['_controller' => 'App\\Controller\\MovieController::index'], [], [['text', '/movie']], [], [], []],
    'movies' => [[], ['_controller' => 'App\\Controller\\MoviesController::index'], [], [['text', '/movies']], [], [], []],
    'app_movies_create' => [[], ['_controller' => 'App\\Controller\\MoviesController::create'], [], [['text', '/movies/create']], [], [], []],
    'editMovie' => [['movie'], ['_controller' => 'App\\Controller\\MoviesController::edit'], [], [['variable', '/', '[^/]++', 'movie', true], ['text', '/movies/edit']], [], [], []],
    'app_movies_show' => [['movie'], ['_controller' => 'App\\Controller\\MoviesController::show'], [], [['variable', '/', '[^/]++', 'movie', true], ['text', '/movies']], [], [], []],
    'old' => [[], ['_controller' => 'App\\Controller\\MoviesController::show'], [], [['text', '/show']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'app_vinyl_homepage' => [[], ['_controller' => 'App\\Controller\\VinylController::homepage'], [], [['text', '/']], [], [], []],
    'app_vinyl_browse' => [['name'], ['name' => null, '_controller' => 'App\\Controller\\VinylController::Browse'], [], [['variable', '/', '[^/]++', 'name', true], ['text', '/browse']], [], [], []],
];
