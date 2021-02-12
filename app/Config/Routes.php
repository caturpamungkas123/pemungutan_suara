<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.


// (/) ITU SAMA DENGAN = Localhost:8080
// jika ada yang mengakses localhost:8080 maka arahkan ke Page.php(di folder controler) metod/function index.
$routes->get('/', 'Pemilih/Home::index');

// $1 harus ada untuk mengisi sebagai slug

// '/Coba' = cara baca  localhost:8080/Coba
// Maka yang akan tampil adalah hala utama pada Coba.php di CONTROLEER
// $routes->get('/Coba/(:any)', 'Coba::about/$1');
//****** CI akan membuat jalur ketika ada AKSES YANG METODENYA GET (KETIKA MENGETIK SESUATU DI URL) *****/
/**alamatnya adalah ( / ) ARTINYA root/url utama
 * arahkan ke controlel HOME lalu metodnya INDEX ****
 * 
 * 
 * 
 * 
 * 
 * 
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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
