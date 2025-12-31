<?php

use Config\Services;

$routes = Services::routes();

$routes->get('/', 'Crud::index');
$routes->post('crear', 'Crud::crear');
$routes->post('actualizar', 'Crud::actualizar');
$routes->get('obtenerNombre/(:num)', 'Crud::obtenerNombre/$1');
$routes->get('eliminar/(:num)', 'Crud::eliminar/$1');
