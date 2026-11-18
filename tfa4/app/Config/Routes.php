<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Public pages
$routes->get('/', 'AuthController::login');
$routes->get('about', 'Pages::about', ['filter' => 'auth']);

// Authentication
$routes->get('login', 'AuthController::login');
$routes->post('login', 'AuthController::authenticate');

// Protected pages
$routes->group('', ['filter' => 'auth'], static function ($routes) {

    // Logout
    $routes->post('logout', 'AuthController::logout');

    // Customers
    $routes->get('customers', 'Customers::index');
    $routes->get('customers/new', 'Customers::new');
    $routes->post('customers/create', 'Customers::create');
    $routes->get('customers/edit/(:num)', 'Customers::edit/$1');
    $routes->post('customers/update/(:num)', 'Customers::update/$1');

    // Users
    $routes->get('users', 'Users::index');
    $routes->get('users/new', 'Users::new');
    $routes->post('users/create', 'Users::create');
    $routes->get('users/edit/(:num)', 'Users::edit/$1');
    $routes->post('users/update/(:num)', 'Users::update/$1');

});