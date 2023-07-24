<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Homepage');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Homepage::index');

$routes->get('/Beranda', 'Homepage::index');
$routes->get('/Logout', 'Back/Auth::logout');
$routes->get('/View-akun', 'Back/Akun::index', ['filter' => 'Validasilogin']);
$routes->get('/View-pasien', 'Back/Pasien::index', ['filter' => 'Validasilogin']);
$routes->get('/View-antigen', 'Back/Antigen::index', ['filter' => 'Validasilogin']);
$routes->get('/View-kb', 'Back/Kb::index', ['filter' => 'Validasilogin']);
$routes->get('/View-kir', 'Back/Kir::index', ['filter' => 'Validasilogin']);
$routes->get('/View-Vitamin', 'Back/Vitamin::index', ['filter' => 'Validasilogin']);
$routes->get('/View-sakit', 'Back/Sakit::index', ['filter' => 'Validasilogin']);
$routes->get('/View-operasi', 'Back/Operasi::index', ['filter' => 'Validasilogin']);
$routes->get('/View-jahit', 'Back/Jahit::index', ['filter' => 'Validasilogin']);
$routes->get('/View-kolestrol', 'Back/Kolestrol::index', ['filter' => 'Validasilogin']);
$routes->get('/View-asamurat', 'Back/Asamurat::index', ['filter' => 'Validasilogin']);
$routes->get('/View-sunat', 'Back/Sunat::index', ['filter' => 'Validasilogin']);
$routes->get('/View-layanan', 'Back/Layanan::index', ['filter' => 'Validasilogin']);
$routes->get('/View-obat', 'Back/Obat::index', ['filter' => 'Validasilogin']);
$routes->get('/View-obat-masuk', 'Back/Masuk::index', ['filter' => 'Validasilogin']);
$routes->get('/View-obat-keluar', 'Back/Keluar::index', ['filter' => 'Validasilogin']);
$routes->get('/Berobat', 'Back/Berobat::index', ['filter' => 'Validasilogin']);
$routes->get('/Berobatt', 'Back/Berobat::indexx', ['filter' => 'Validasilogin']);
$routes->get('/S_sakit/(:any)', 'Back\Sakit::cetak/$1', ['filter' => 'Validasilogin']);
$routes->get('/S_kir/(:any)', 'Back\Kir::cetak/$1', ['filter' => 'Validasilogin']);
$routes->get('/Kartu/(:any)', 'Back\Pasien::cetak/$1', ['filter' => 'Validasilogin']);

$routes->get('/Antrian', 'Back/Antrian::index', ['filter' => 'Validasilogin']);
$routes->get('/Riwayat', 'Back/Transaksi::index', ['filter' => 'Validasilogin']);
$routes->get('/Antrian-obat', 'Back/Antrianobat::index', ['filter' => 'Validasilogin']);
$routes->get('/Laporan', 'Back/Laporan::index', ['filter' => 'Validasilogin']);

$routes->get('/formtambahmasuk', 'Back/Masuk::formtambah', ['filter' => 'Validasilogin']);


$routes->get('/Detail-Pasien/(:any)', 'Back\Pasien::detail/$1', ['filter' => 'Validasilogin']);
$routes->get('/Detail-Pasienn/(:any)', 'Back\Pasien::detaill/$1', ['filter' => 'Validasilogin']);
$routes->get('/Proses-berobat', 'Back/Pasien::proses', ['filter' => 'Validasilogin']);

$routes->get('/formtambahrm/(:any)', 'Back\Rm::formtambah/$1', ['filter' => 'Validasilogin']);
$routes->get('/Detailrm/(:any)', 'Back\Rm::ambildata/$1', ['filter' => 'Validasilogin']);
$routes->get('/Detailtransaksi/(:any)', 'Back\Riwayat::ambildata/$1', ['filter' => 'Validasilogin']);

$routes->post('/Lisdata/(:any)', 'Back\Rm::listdata/$1', ['filter' => 'Validasilogin']);
$routes->post('/Lisdatatransaksi/(:any)', 'Back\Riwayat::listdata/$1', ['filter' => 'Validasilogin']);
$routes->get('/tambah_antigen/(:any)', 'Back\Antigen::formtambah/$1', ['filter' => 'Validasilogin']);
$routes->get('/tambahkb/(:any)', 'Back\Kb::formtambah/$1', ['filter' => 'Validasilogin']);
$routes->get('/tambahkir/(:any)', 'Back\Kir::formtambah/$1', ['filter' => 'Validasilogin']);
$routes->get('/tambahvitamin/(:any)', 'Back\Vitamin::formtambah/$1', ['filter' => 'Validasilogin']);
$routes->get('/tambahsakit/(:any)', 'Back\Sakit::formtambah/$1', ['filter' => 'Validasilogin']);
$routes->get('/tambahoperasi/(:any)', 'Back\Operasi::formtambah/$1', ['filter' => 'Validasilogin']);
$routes->get('/tambahjahit/(:any)', 'Back\Jahit::formtambah/$1', ['filter' => 'Validasilogin']);
$routes->get('/tambahkolestrol/(:any)', 'Back\Kolestrol::formtambah/$1', ['filter' => 'Validasilogin']);
$routes->get('/tambahasamurat/(:any)', 'Back\Asamurat::formtambah/$1', ['filter' => 'Validasilogin']);
$routes->get('/tambahsunat/(:any)', 'Back\Sunat::formtambah/$1', ['filter' => 'Validasilogin']);

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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}