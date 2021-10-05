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
$routes->set404Override();
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

    $routes->group('landing', function ($routes) {
        $routes->get("", "Dashboard\Landing::index", ["as" => "dashboard.landing.index"]);
    });
    $routes->group('industries', function ($routes) {
        $routes->get("", "Dashboard\Industries::index", ["as" => "dashboard.industries.index"]);
    });
    $routes->group('insights', function ($routes) {
        $routes->get("", "Dashboard\Insights::index", ["as" => "dashboard.insights.index"]);
    });
    $routes->group('webinars', function ($routes) {
        $routes->get("", "Dashboard\Webinars::index", ["as" => "dashboard.webinars.index"]);
    });
    $routes->group('services', function ($routes) {
        $routes->get("", "Dashboard\Services::index", ["as" => "dashboard.services.index"]);
    });
    $routes->group('careers', function ($routes) {
        $routes->get("", "Dashboard\Careers::index", ["as" => "dashboard.careers.index"]);
    });
    $routes->group('about', function ($routes) {
        $routes->get("", "Dashboard\About::index", ["as" => "dashboard.about.index"]);
    });
    $routes->group('contact', function ($routes) {
        $routes->get("", "Dashboard\Contact::index", ["as" => "dashboard.contact.index"]);
    });
});

$routes->group("object", function ($routes) {
    $routes->group('carouselBanner', function ($routes) {
        $routes->post('create', "Object\CarouselBanner::create", ["as" => "object.carouselBanner.create"]);
        $routes->get('get', "Object\CarouselBanner::get", ["as" => "object.carouselBanner.get"]);
    });

    $routes->group('teams', function ($routes) {
        $routes->post('create', "Object\Teams::create", ["as" => "object.teams.create"]);
        $routes->post('delete/(:num)', "Object\Teams::delete/$1", ["as" => "object.teams.delete"]);
        $routes->get('get', "Object\Teams::get", ["as" => "object.teams.get"]);
    });

    $routes->group('whatAndHowWeDo', function ($routes) {
        $routes->get('get', "Object\WhatAndHowWeDo::get", ["as" => "object.whatAndHowWeDo.get"]);
    });

    $routes->group('services', function ($routes) {
        $routes->get('get', "Object\Services::get", ["as" => "object.services.get"]);
    });

    $routes->group('careers', function ($routes) {
        $routes->get('get', "Object\Careers::get", ["as" => "object.careers.get"]);
        $routes->get('getPageData', "Object\Careers::getPageData", ["as" => "object.careers.getPageData"]);
    });

    $routes->group('lines', function ($routes) {
        $routes->post('upload', "Object\Lines::upload", ["as" => "object.lines.upload"]);
        $routes->post('update/(:segment)', "Object\Lines::update/$1", ["as" => "object.lines.update"]);
    });
});
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
