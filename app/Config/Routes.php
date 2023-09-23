<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/catego', 'Home::catego');
$routes->get('/home', 'Home::home');
$routes->get('/homes', 'Home::homes');
$routes->get('/Insert', 'Home::Insert');
$routes->post('/actioninsert', 'Home::actioninsert');
$routes->get('/delete/(:any)', 'Home::delete/$1');
$routes->get('/edit/(:any)', 'Home::edit/$1');
$routes->put('/Update(:any)', 'Home::Update/$1');