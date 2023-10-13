<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->group('/', ['namespace' => 'App\Controllers'], function ($subroutes) {
    $subroutes->get('', 'Home::index');
    $subroutes->get('login', 'Home::login');
});
