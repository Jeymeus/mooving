<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/vehicules' => [[['_route' => 'vehicle_index', '_controller' => 'App\\Controller\\VehicleController::index'], null, ['GET' => 0], null, false, false, null]],
        '/vehicules/ajouter' => [[['_route' => 'vehicle_create', '_controller' => 'App\\Controller\\VehicleController::create'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/disponibilites/ajouter' => [[['_route' => 'availability_create', '_controller' => 'App\\Controller\\AvailabilityController::create'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/recherche' => [[['_route' => 'search_availability', '_controller' => 'App\\Controller\\SearchController::searchAvailability'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/disponibilites/(?'
                    .'|([a-z0-9\\-]+)(*:39)'
                    .'|([a-z0-9\\-]+)/(\\d+)/modifier(*:74)'
                    .'|([a-z0-9\\-]+)/(\\d+)/confirmer(*:110)'
                    .'|([a-z0-9\\-]+)/(\\d+)/supprimer(*:147)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        39 => [[['_route' => 'availability_show', '_controller' => 'App\\Controller\\AvailabilityController::show'], ['slug'], ['GET' => 0], null, false, true, null]],
        74 => [[['_route' => 'availability_edit', '_controller' => 'App\\Controller\\AvailabilityController::edit'], ['slug', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        110 => [[['_route' => 'availability_delete_confirm', '_controller' => 'App\\Controller\\AvailabilityController::deleteConfirm'], ['slug', 'id'], ['GET' => 0], null, false, false, null]],
        147 => [
            [['_route' => 'availability_delete', '_controller' => 'App\\Controller\\AvailabilityController::delete'], ['slug', 'id'], ['DELETE' => 0], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
