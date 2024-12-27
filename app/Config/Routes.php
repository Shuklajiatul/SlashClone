<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index'); // Set default route to the index page

$routes->get('/users', 'UserController::index');
$routes->get('/chatApp/index', 'ChatController::index');
$routes->get('/campaigns', 'CampaignController::index');
$routes->get('/campaigns/create', 'CampaignController::create');
$routes->post('/campaigns/store', 'CampaignController::store');
$routes->get('/campaigns/edit/(:num)', 'CampaignController::edit/$1');
$routes->post('/campaigns/update/(:num)', 'CampaignController::update/$1');
$routes->post('/campaigns/delete/(:num)', 'CampaignController::delete/$1');
$routes->get('/users/create', 'UserController::create');
$routes->post('/users/store', 'UserController::store');
$routes->get('/users/edit/(:num)', 'UserController::edit/$1');
$routes->post('/campaigns/filter', 'CampaignController::filter'); // Add this line for filtering campaigns
$routes->post('/users/filter', 'UserController::filter'); // Add this line for filtering users
$routes->post('/users/update/(:num)', 'UserController::update/$1');
$routes->post('/users/delete/(:num)', 'UserController::delete/$1');
