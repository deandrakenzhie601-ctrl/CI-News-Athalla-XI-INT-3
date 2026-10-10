<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');
$routes->get('/about', 'Page::about');
$routes->get('/contact', 'Page::contact');
$routes->get('/faqs', 'Page::faqs');
$routes->get('/tos', 'Page::tos');
$routes->get('/news', 'News::index');
$routes->get('/news/(:any)', 'News::viewNews/$1');

$routes->get('auth/login', 'Auth::login');
$routes->post('auth/loginProcess', 'Auth::loginProcess');
$routes->get('auth/logout', 'Auth::logout');
$routes->get('dashboard', 'Dashboard::index', ['filter' => 'auth']);

$routes->group('admin', static function ($routes) {
    $routes->get('', 'NewsAdmin::index');
    $routes->get('news', 'NewsAdmin::index');
    $routes->get('news/(:segment)/preview', 'NewsAdmin::preview/$1');
    $routes->add('news/new', 'NewsAdmin::create');
    $routes->add('news/(:segment)/edit', 'NewsAdmin::edit/$1');
    $routes->get('news/(:segment)/delete', 'NewsAdmin::delete/$1');
    $routes->get('auth/login', 'Auth::login');
    $routes->post('auth/loginProcess', 'Auth::loginProcess');
    $routes->get('auth/logout', 'Auth::logout');
    $routes->get('dashboard', 'Dashboard::index', ['filter' => 'auth']);
});