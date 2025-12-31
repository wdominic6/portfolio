<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Crud::index');
$routes->post('crear', 'Crud::crear');
$routes->post('actualizar', 'Crud::actualizar');
$routes->get('obtenerNombre/(:num)', 'Crud::obtenerNombre/$1');
$routes->get('eliminar/(:num)', 'Crud::eliminar/$1');
