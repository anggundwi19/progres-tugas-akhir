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
$routes->setDefaultController('UserController');
$routes->setDefaultMethod('login');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

// Rute untuk Auth (Login dan Register di satu controller)
$routes->get('/user/register', 'userController::register');              // Menampilkan form login
$routes->post('/user/processRegister', 'userController::processRegister');       // Memproses login
$routes->get('/user/login', 'userController::login');         // Menampilkan form registrasi
$routes->post('/user/processLogin', 'userController::processLogin'); // Memproses registrasi
$routes->get('/user/logout', 'userController::logout');             // Logout

$routes->get('/pegawai/homePegawai', 'PegawaiController::homePegawai');
$routes->get('/pemilik/homePemilik', 'PemilikController::homePemilik');

// Group routes based on authentication
$routes->group('pemilik', ['filter' => 'role:pemilik'], function ($routes) {

    // pemilik routes
    $routes->get('homePemilik', 'pemilikController::index');
    // $routes->get('create', 'AdminController::create');
    // $routes->post('store', 'AdminController::store');
    // $routes->get('edit/(:num)', 'AdminController::edit/$1');
    // $routes->post('update/(:num)', 'AdminController::update/$1');

//     $routes->get('/petugas', 'PetugasController::index');
// $routes->get('/petugas/create', 'PetugasController::create');
// $routes->post('/petugas/store', 'PetugasController::store');
// $routes->get('/petugas/edit/(:num)', 'PetugasController::edit/$1');
// $routes->post('/petugas/update/(:num)', 'PetugasController::update/$1');
// $routes->get('/petugas/delete/(:num)', 'PetugasController::delete/$1');

});

/*
 * --------------------------------------------------------------------
 * Grouped Routes for Authenticated Users
 * --------------------------------------------------------------------
 */

    // Tambahkan rute lain yang membutuhkan login di sini

$routes->get('/', 'userController::login');

if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
