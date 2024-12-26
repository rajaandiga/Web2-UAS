<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('search', 'Home::search');
$routes->get('images/(:segment)', 'Home::images/$1');

service('auth')->routes($routes);

// Admin
$routes->group('admin', ['filter' => 'group:admin'], function ($routes) {
    $routes->get('dashboard', 'Admin::dashboard');
    $routes->get('datatulisan', 'Admin::datatulisan');
    $routes->get('datamahasiswa', 'Admin::datamahasiswa');
    $routes->post('datamahasiswa', 'Admin::datamahasiswa');
    $routes->post('datatulisan', 'Admin::create_buku');
    $routes->get('datatulisan/(:segment)/edit', 'Admin::edit_artikel/$1');
    $routes->post('datatulisan/(:segment)/update', 'Admin::update_artikel/$1');
    $routes->get('datatulisan/(:segment)/delete', 'Admin::delete_artikel/$1');

});
 