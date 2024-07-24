<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('ver_regiones','RegionesController::index');
$routes->get('nuevas_regiones','RegionesController::nuevasRegiones');
$routes->post('agregar_regiones','RegionesController::agregarRegiones');


$routes->get('ver_departamentos','DepartamentosController::index');
$routes->get('nuevos_departamentos','DepartamentosController::nuevosDepartamentos');
$routes->post('agregar_departamentos','DepartamentosController::agregarDepartamentos');


$routes->get('ver_municipios','MunicipiosController::index');
$routes->get('nuevos_municipios','MunicipiosController::nuevosMunicipios');
$routes->post('agregar_municipio','MunicipiosController::agregarMunicipios');



$routes->get('ver_ciudadanos','CiudadanosController::index');
$routes->get('nuevos_ciudadanos','CiudadanosController::nuevosCiudadanos');
$routes->post('agregar_ciudadanos','CiudadanosController::agregarCiudadanos');




$routes->get('ver_niveles','NivelesacademicosController::index');
$routes->get('nuevos_niveles','NivelesacademicosController::nuevosNiveles');
$routes->post('agregar_niveles','NivelesacademicosController::agregarNiveles');



