<?php
use CodeIgniter\Router\RouteCollection;
/**
 * @var RouteCollection
 */

$routes->get('./', 'Login::login');
$routes->get('/login', 'Login::login');
$routes->post('/proses_login.php', 'Login::prosesLogin'); 
$routes->get('/logout', 'LoginController::logout');


$routes->get('/buku', 'Book::book');
$routes->get('/pengguna', 'Book::user');
$routes->get('/buku/create', 'Book::create');
$routes->post('/buku/save', 'Book::save');
$routes->get('buku/edit/(:num)', 'Book::edit/$1');
$routes->post('buku/update/(:num)', 'Book::update/$1');
$routes->post('buku/delete/(:num)', 'Book::delete/$1');


$routes->get('/user', 'User::user');
$routes->get('/user/create', 'User::create');
$routes->post('/user/save', 'User::save');
$routes->get('user/edit/(:num)', 'User::edit/$1');
$routes->post('user/update/(:num)', 'User::update/$1');
$routes->post('user/delete/(:num)', 'User::delete/$1');








