<?php

use CodeIgniter\Router\RouteCollection;

//$routes->setAutoRoute(true);

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/productos', 'Productos::index');
$routes->get('/productos/(:num)','Productos::show/$1');
$routes->get('/productos/(:alpha)/(:num)','Productos::cat/$1/$2');

$routes->view('productosList/(:alpha)','lista_productos');

$routes->group('admin', static function($routes) {
    $routes->get('/productos', 'Admin/Producos::index');
});