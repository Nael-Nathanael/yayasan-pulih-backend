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
$routes->get('/logout', 'Home::do_logout', ["as" => "auth.logout"]);

$routes->group('dashboard', function ($routes) {
    $routes->get("", "Dashboard::index", ["as" => "dashboard.landing"]);

    $routes->get('home', "Dashboard\Home::index", ["as" => "dashboard.home.index"]);
    $routes->get('tentang-pulih', "Dashboard\TentangPulih::index", ["as" => "dashboard.tentang-pulih.index"]);
    $routes->get('faq', "Dashboard\Faq::index", ["as" => "dashboard.faq.index"]);

    $routes->group('articles', function ($routes) {
        $routes->get("", "Dashboard\Articles::index", ["as" => "dashboard.articles.index"]);
        $routes->get("create", "Dashboard\Articles::create", ["as" => "dashboard.articles.create"]);
        $routes->get("update/(:segment)", "Dashboard\Articles::update/$1", ["as" => "dashboard.articles.update"]);
    });

    $routes->get('laporan-audit', "Dashboard\LaporanAudit::index", ["as" => "dashboard.laporan-audit.index"]);
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

    $routes->group('lines', function ($routes) {
        $routes->post('upload', "Object\Lines::upload", ["as" => "object.lines.upload"]);
        $routes->post('dumpUpload', "Object\Lines::dumpUpload", ["as" => "object.lines.dumpUpload"]);
        $routes->post('update/(:segment)', "Object\Lines::update/$1", ["as" => "object.lines.update"]);
        $routes->get('get/(:segment)', "Object\Lines::getByKey/$1", ["as" => "object.lines.getByKey"]);
        $routes->post('getFormatted', "Object\Lines::getFormatted", ["as" => "object.lines.getFormatted"]);
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
