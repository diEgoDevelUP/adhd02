<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('cliente', 'ClientesController::index');
$routes->get('lineas', 'LineasTelefonicasController::index');
$routes->get('planes', 'PlanesController::index');