<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->setAutoRoute(true);


$routes->get('/', 'Home::index');

//Definisi route buat register
$routes->group('register', function($routes){
    $routes->get('/', 'RegisterController::index');
    $routes->post('/', 'RegisterController::store');
    
});

//Definisi route buat login
$routes->group('login', function($routes) {
    $routes->get('/', 'LoginController::index');
    $routes->post('/', 'LoginController::login');
});

$routes->get('/dashboard', 'Dashboard::index');
$routes->get('/dashboard', 'Helm::index');

//Route buat logout

$routes->group('logout', function($routes){
    $routes->get('/', 'LogoutController::index');
});
