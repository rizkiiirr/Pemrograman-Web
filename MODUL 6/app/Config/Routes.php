<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');
$routes->get('/home', 'Home::index');
$routes->get('/pages/index', 'Pages::index');
$routes->get('/pages/home', 'Pages::home');
$routes->get('/pages/about', 'Pages::about');

$routes->get('/prak_601/home', 'prak_601::home');
$routes->get('/prak_601/profile', 'prak_601::profile');