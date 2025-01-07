<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/buttons', 'Home::buttons');
$routes->get('/dropdowns', 'Home::dropdowns');
$routes->get('/typography', 'Home::typography');
$routes->get('/icons', 'Home::icons');
$routes->get('/forms', 'Home::forms');
$routes->get('/charts', 'Home::charts');
$routes->get('/tables', 'Home::tables');
