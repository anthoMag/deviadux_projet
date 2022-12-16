<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/about' => [[['_route' => 'app_about', '_controller' => 'App\\Controller\\AboutController::index'], null, null, null, false, false, null]],
        '/actualites' => [[['_route' => 'app_actualites', '_controller' => 'App\\Controller\\ActualitesController::index'], null, null, null, false, false, null]],
        '/cartes' => [[['_route' => 'app_cartes', '_controller' => 'App\\Controller\\CartesController::index'], null, null, null, false, false, null]],
        '/episodes' => [[['_route' => 'app_episodes', '_controller' => 'App\\Controller\\EpisodesController::index'], null, null, null, false, false, null]],
        '/first' => [[['_route' => 'app_first', '_controller' => 'App\\Controller\\FirstController::index'], null, null, null, false, false, null]],
        '/hexago' => [[['_route' => 'app_hexago', '_controller' => 'App\\Controller\\HexagoController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/pingo' => [[['_route' => 'app_pingo', '_controller' => 'App\\Controller\\PingoController::index'], null, null, null, false, false, null]],
        '/profil' => [[['_route' => 'app_profil', '_controller' => 'App\\Controller\\ProfilController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
