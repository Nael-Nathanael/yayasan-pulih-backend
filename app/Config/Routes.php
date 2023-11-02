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
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index', ["as" => "auth.page"]);
$routes->post('/', 'Home::do_auth', ["as" => "auth.do_auth"]);
$routes->post('/session.lang', 'Home::do_change_lag', ["as" => "session.lang"]);
$routes->get('/logout', 'Home::do_logout', ["as" => "auth.logout"]);

$routes->group('dashboard', function ($routes) {
    $routes->get("", "Dashboard::index", ["as" => "dashboard.landing"]);

    $routes->get('home', "Dashboard\Home::index", ["as" => "dashboard.home.index"]);
    $routes->get('tentang-pulih', "Dashboard\TentangPulih::index", ["as" => "dashboard.tentang-pulih.index"]);
    $routes->get('donate', "Dashboard\Donate::index", ["as" => "dashboard.donate.index"]);

    $routes->group('articles', function ($routes) {
        $routes->get("", "Dashboard\Articles::index", ["as" => "dashboard.articles.index"]);
        $routes->get("create", "Dashboard\Articles::create", ["as" => "dashboard.articles.create"]);
        $routes->get("update/(:segment)", "Dashboard\Articles::update/$1", ["as" => "dashboard.articles.update"]);
    });

    $routes->group('psy', function ($routes) {
        $routes->get('', "Dashboard\Psy::index", ["as" => "dashboard.psy.index"]);
        $routes->get("create", "Dashboard\Psy::create", ["as" => "dashboard.psy.create"]);
        $routes->get("update/(:segment)", "Dashboard\Psy::update/$1", ["as" => "dashboard.psy.update"]);
    });

    $routes->group('events', function ($routes) {
        $routes->get("", "Dashboard\Events::index", ["as" => "dashboard.events.index"]);
        $routes->get("create", "Dashboard\Events::create", ["as" => "dashboard.events.create"]);
        $routes->get("update/(:segment)", "Dashboard\Events::update/$1", ["as" => "dashboard.events.update"]);
    });

    $routes->group('faq', function ($routes) {
        $routes->get("", "Dashboard\Faq::index", ["as" => "dashboard.faq.index"]);
        $routes->get("create", "Dashboard\Faq::create", ["as" => "dashboard.faq.create"]);
        $routes->get("update/(:segment)", "Dashboard\Faq::update/$1", ["as" => "dashboard.faq.update"]);
    });

    $routes->get('laporan-audit', "Dashboard\LaporanAudit::index", ["as" => "dashboard.laporan-audit.index"]);
    $routes->get('mitra', "Dashboard\Mitra::index", ["as" => "dashboard.mitra.index"]);

    $routes->group('lowongan', function ($routes) {
        $routes->get("", "Dashboard\Lowongan::index", ["as" => "dashboard.lowongan.index"]);
        $routes->get("pekerjaan", "Dashboard\Lowongan::pekerjaan", ["as" => "dashboard.lowongan.pekerjaan"]);
        $routes->get("magang", "Dashboard\Lowongan::magang", ["as" => "dashboard.lowongan.magang"]);
    });

    $routes->group('kerja-pulih', function ($routes) {
        $routes->get("layanan-konseling-psikologi", "Dashboard\KerjaPulih::lkp", ["as" => "dashboard.kerja-pulih.lkp"]);
        $routes->get("pelatihan-dan-narasumber", "Dashboard\KerjaPulih::pdn", ["as" => "dashboard.kerja-pulih.pdn"]);
        $routes->get("p4", "Dashboard\KerjaPulih::p4", ["as" => "dashboard.kerja-pulih.p4"]);

        $routes->get("c4c", "Dashboard\KerjaPulih::c4c", ["as" => "dashboard.kerja-pulih.c4c"]);
        $routes->get("sot", "Dashboard\KerjaPulih::sot", ["as" => "dashboard.kerja-pulih.sot"]);
        $routes->get("jt", "Dashboard\KerjaPulih::jt", ["as" => "dashboard.kerja-pulih.jt"]);

        $routes->get("konsultasi-email", "Dashboard\KerjaPulih::ke", ["as" => "dashboard.kerja-pulih.ke"]);
    });

});

$routes->group("object", function ($routes) {
    $routes->group('articles', function ($routes) {
        $routes->post('create', "Object\Articles::create", ["as" => "object.articles.create"]);
        $routes->post('delete/(:segment)', "Object\Articles::delete/$1", ["as" => "object.articles.delete"]);
        $routes->post('update/(:segment)', "Object\Articles::update/$1", ["as" => "object.articles.update"]);
        $routes->get('get', "Object\Articles::get", ["as" => "object.articles.get"]);
        $routes->get('getFeatured', "Object\Articles::getFeatured", ["as" => "object.articles.getFeatured"]);
        $routes->get('get/(:segment)', "Object\Articles::get/$1", ["as" => "object.articles.getSpecific"]);
    });

    $routes->group('psy', function ($routes) {
        $routes->post('create', "Object\Psy::create", ["as" => "object.psy.create"]);
        $routes->post('delete/(:segment)', "Object\Psy::delete/$1", ["as" => "object.psy.delete"]);
        $routes->post('update/(:segment)', "Object\Psy::update/$1", ["as" => "object.psy.update"]);
        $routes->get('get', "Object\Psy::get", ["as" => "object.psy.get"]);
        $routes->get('get/(:segment)', "Object\Psy::get/$1", ["as" => "object.psy.getSpecific"]);
    });

    $routes->group('events', function ($routes) {
        $routes->post('create', "Object\Events::create", ["as" => "object.events.create"]);
        $routes->post('delete/(:segment)', "Object\Events::delete/$1", ["as" => "object.events.delete"]);
        $routes->post('update/(:segment)', "Object\Events::update/$1", ["as" => "object.events.update"]);
        $routes->get('get', "Object\Events::get", ["as" => "object.events.get"]);
        $routes->get('getFeatured', "Object\Events::getFeatured", ["as" => "object.events.getFeatured"]);
        $routes->get('get/(:segment)', "Object\Events::get/$1", ["as" => "object.events.getSpecific"]);
    });

    $routes->group('faq', function ($routes) {
        $routes->post('create', "Object\Faq::create", ["as" => "object.faq.create"]);
        $routes->post('delete/(:segment)', "Object\Faq::delete/$1", ["as" => "object.faq.delete"]);
        $routes->post('update/(:segment)', "Object\Faq::update/$1", ["as" => "object.faq.update"]);
        $routes->get('', "Object\Faq::get_all", ["as" => "object.faq.index"]);
    });

    $routes->group('big_team', function ($routes) {
        $routes->post('create', "Object\BigTeam::create", ["as" => "object.big-team.create"]);
        $routes->post('delete/(:segment)', "Object\BigTeam::delete/$1", ["as" => "object.big-team.delete"]);
        $routes->post('update/(:segment)', "Object\BigTeam::update/$1", ["as" => "object.big-team.update"]);
        $routes->get('', "Object\BigTeam::get_all", ["as" => "object.big-team.index"]);
    });

    $routes->group('mitra', function ($routes) {
        $routes->post('create', "Object\Mitra::create", ["as" => "object.mitra.create"]);
        $routes->post('delete/(:segment)', "Object\Mitra::delete/$1", ["as" => "object.mitra.delete"]);
        $routes->post('update/(:segment)', "Object\Mitra::update/$1", ["as" => "object.mitra.update"]);
        $routes->get('', "Object\Mitra::get_all", ["as" => "object.mitra.index"]);
    });

    $routes->group('laporan-audit', function ($routes) {
        $routes->post('create', "Object\LaporanAudit::create", ["as" => "object.laporan-audit.create"]);
        $routes->post('delete/(:segment)', "Object\LaporanAudit::delete/$1", ["as" => "object.laporan-audit.delete"]);
        $routes->post('update/(:segment)', "Object\LaporanAudit::update/$1", ["as" => "object.laporan-audit.update"]);
        $routes->get('', "Object\LaporanAudit::get_all", ["as" => "object.laporan-audit.index"]);
    });

    $routes->group('lines', function ($routes) {
        $routes->post('upload', "Object\Lines::upload", ["as" => "object.lines.upload"]);
        $routes->post('dumpUpload', "Object\Lines::dumpUpload", ["as" => "object.lines.dumpUpload"]);
        $routes->post('update/(:segment)', "Object\Lines::update/$1", ["as" => "object.lines.update"]);
        $routes->post('update/EN_/(:segment)', "Object\Lines::updateEn/$1", ["as" => "object.lines.update.en"]);
        $routes->get('get/(:segment)', "Object\Lines::getByKey/$1", ["as" => "object.lines.getByKey"]);
        $routes->post('getFormatted', "Object\Lines::getFormatted", ["as" => "object.lines.getFormatted"]);
        $routes->post('getFormatted/EN_', "Object\Lines::getFormattedEn", ["as" => "object.lines.getFormattedEn"]);
    });
});

$routes->options('(:any)', "Object\Articles::get", ["as" => "object.articles.get"]);

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
