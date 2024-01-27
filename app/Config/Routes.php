<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

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
$routes->get('/', 'Home::index');
$routes->get('/privacy', 'Home::privacy');
$routes->get('/imprint', 'Home::imprint');
$routes->get('/admins', 'Home::login');
// $routes->get('/login', 'Home::login');
$routes->get('/daftar', 'Home::daftar');
$routes->post('/cek-login', 'Home::cek_login');
$routes->post('/simpan-daftar', 'Home::simpan_daftar');

// jadwal
$routes->get('/PageJadwal', 'Home::jadwal');

// member
$routes->get('/profil-member', 'Home::profil_member', ['filter' => 'member']);
$routes->get('/kirim', 'Home::kirim', ['filter' => 'member']);
$routes->get('/kejerman', 'Home::kejerman', ['filter' => 'member']);
$routes->get('/keindonesia', 'Home::keindonesia', ['filter' => 'member']);
$routes->get('/paketku', 'Home::paketku', ['filter' => 'member']);
$routes->get('/bayar/(:any)', 'Home::bayar/$1', ['filter' => 'member']);

$routes->POST('/kirim-kejerman', 'Home::kirim_kejerman', ['filter' => 'member']);
$routes->POST('/simpan-profil', 'Home::simpan_profil', ['filter' => 'member']);
$routes->POST('/kirim-keindonesia', 'Home::kirim_keindonesia', ['filter' => 'member']);
$routes->POST('/hapus-paketku', 'Home::hapus_paketku', ['filter' => 'member']);

// admin
$routes->get('/admin', 'Admin::index', ['filter' => 'admin']);
$routes->get('/profil-admin', 'Admin::profil_admin', ['filter' => 'admin']);
$routes->get('/data-member', 'Admin::data_member', ['filter' => 'admin']);
$routes->get('/paket', 'Admin::paket', ['filter' => 'admin']);
$routes->get('/proses', 'Admin::proses', ['filter' => 'admin']);
$routes->get('/tuntas', 'Admin::tuntas', ['filter' => 'admin']);

$routes->POST('/ubah-paket', 'Admin::ubah_paket', ['filter' => 'admin']);
$routes->POST('/ubah-proses', 'Admin::ubah_proses', ['filter' => 'admin']);
$routes->POST('/ubah-proses-terima', 'Admin::ubah_proses2', ['filter' => 'admin']);
$routes->POST('/ubah-proses-terus', 'Admin::ubah_proses3', ['filter' => 'admin']);
$routes->POST('/ubah-proses-sampai', 'Admin::ubah_proses4', ['filter' => 'admin']);
$routes->POST('/ubah-kirim', 'Admin::ubah_kirim', ['filter' => 'admin']);

$routes->POST('/hapus-paket', 'Admin::hapus_paket', ['filter' => 'admin']);

// SUPER
$routes->get('/super', 'Super::index', ['filter' => 'super']);
// new
$routes->get('/Pagejadwal', 'Super::jadwal', ['filter' => 'super']);
$routes->post('/simpan', 'Super::addJadwal', ['filter' => 'super']);
$routes->get('hapus/(:any)', 'Super::hapus/$1', ['filter' => 'super']);
// end new
$routes->get('/profil-admins', 'Super::profil_admin', ['filter' => 'super']);
$routes->get('/Editprofil', 'Super::EditProfil', ['filter' => 'super']);
$routes->post('update/(:any)', 'Super::UpdateProfil/$1', ['filter' => 'super']);

$routes->get('/data-members', 'Super::data_member', ['filter' => 'super']);
$routes->get('/pakets', 'Super::paket', ['filter' => 'super']);
$routes->get('/prosess', 'Super::proses', ['filter' => 'super']);
$routes->get('/tuntass', 'Super::tuntas', ['filter' => 'super']);

$routes->POST('/ubah-pakets', 'Super::ubah_paket', ['filter' => 'super']);
$routes->POST('/ubah-prosess', 'Super::ubah_proses', ['filter' => 'super']);
$routes->POST('/ubah-kirims', 'Super::ubah_kirim', ['filter' => 'super']);

$routes->POST('/hapus-pakets', 'Super::hapus_paket', ['filter' => 'super']);

$routes->get('/terms', 'Home::terms');
$routes->get('/logout', 'Home::logout');
$routes->get('/(:any)', 'Home::logout');

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
