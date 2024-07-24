<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('ciudadanos', 'CiudadanosController::index');
$routes->get('departamentos', 'DepartamentosController::index');
$routes->get('municipios', 'MunicipiosController::index');
$routes->get('niveles', 'NivelesAcademicosController::index');
$routes->get('regiones', 'RegionesController::index');