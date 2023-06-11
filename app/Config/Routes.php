<?php

namespace Config;


// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true); //Untuk mencari jalan sendiri ke database secara otomatis
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/ktp', 'ktp::index');
$routes->get('/pesan', 'pesanController::index');
$routes->get('/', 'userController::login');





use App\Controllers\News;
use App\Controllers\Pages;
use App\Controllers\AsistenController;

$routes->match(
    ['get', 'post'],
    'asisten/simpan',
    [AsistenController::class, 'simpan']
);

$routes->get('asisten/success', 'AsistenController::success');
$routes->get('asisten/update/(:num)', 'AsistenController::update/$1');
$routes->post('asisten/update/(:num)', 'AsistenController::processUpdate/$1');
$routes->get('asisten/delete/(:num)', 'AsistenController::delete/$1');


$routes->get('register', 'userController::register');
$routes->post('register', 'userController::processRegister');
$routes->get('login', 'userController::login');
$routes->post('login', 'userController::processLogin');
$routes->get('logout', 'userController::logout');




$routes->match(['get', 'post'], 'news/create', [News::class, 'create']);
$routes->match(['get', 'post'], 'asisten/search', [AsistenController::class, 'search']);
$routes->get('news/(:segment)', [News::class, 'view']);
$routes->get('news', [News::class, 'index']);
$routes->get('pages', [Pages::class, 'index']);
$routes->get('(:segment)', [Pages::class, 'view']);


// $routes->get('ktp', 'ktp::index');

$route['user'] = 'user/index';
$route['user/save'] = 'user/save';
$route['user/view/(:num)'] = 'user/view/$1';

// $route['default_controller'] = 'pesancontroller';

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
