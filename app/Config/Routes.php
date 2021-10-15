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

$routes->post('/sendmail', 'Home::sendmail', ["as" => "sendmail"]);

$routes->group('dashboard', function ($routes) {
    $routes->get("", "Dashboard::index", ["as" => "dashboard.landing"]);

    $routes->group('landing', function ($routes) {
        $routes->get("", "Dashboard\Landing::index", ["as" => "dashboard.landing.index"]);
        $routes->get("get", "Dashboard\Landing::get", ["as" => "dashboard.landing.get"]);
    });
    $routes->group('insights', function ($routes) {
        $routes->get("", "Dashboard\Insights::index", ["as" => "dashboard.insights.index"]);
        $routes->get("create", "Dashboard\Insights::create", ["as" => "dashboard.insights.create"]);
        $routes->get("update/(:segment)", "Dashboard\Insights::update/$1", ["as" => "dashboard.insights.update"]);
    });
    $routes->group('webinars', function ($routes) {
        $routes->get("", "Dashboard\Webinars::index", ["as" => "dashboard.webinars.index"]);
        $routes->get("presenters/(:segment)", "Dashboard\Webinars::presenter/$1", ["as" => "dashboard.webinars.presenters"]);
    });
    $routes->group('services', function ($routes) {
        $routes->get("", "Dashboard\Services::index", ["as" => "dashboard.services.index"]);

        $routes->group("business_and_risk", function ($routes) {
            $routes->get("", "Dashboard\Services\BusinessAndRiskAdvisory::index", ["as" => "dashboard.service.business_and_risk.index"]);
        });
        $routes->group("it", function ($routes) {
            $routes->get("", "Dashboard\Services\ITAdvisory::index", ["as" => "dashboard.service.it.index"]);
        });
        $routes->group("people", function ($routes) {
            $routes->get("", "Dashboard\Services\PeopleAdvisory::index", ["as" => "dashboard.service.people.index"]);
        });
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
        $routes->post('delete/(:segment)', "Object\CarouselBanner::delete/$1", ["as" => "object.carouselBanner.delete"]);
    });

    $routes->group('insights', function ($routes) {
        $routes->post('create', "Object\Insights::create", ["as" => "object.insights.create"]);
        $routes->post('delete/(:segment)', "Object\Insights::delete/$1", ["as" => "object.insights.delete"]);
        $routes->post('update/(:segment)', "Object\Insights::update/$1", ["as" => "object.insights.update"]);
        $routes->get('get', "Object\Insights::get", ["as" => "object.insights.get"]);
        $routes->get('getFeatured', "Object\Insights::getFeatured", ["as" => "object.insights.getFeatured"]);
        $routes->get('get/(:segment)', "Object\Insights::get/$1", ["as" => "object.insights.getSpecific"]);
    });

    $routes->group('whatAndHowWeDo', function ($routes) {
        $routes->get('get', "Object\WhatAndHowWeDo::get", ["as" => "object.whatAndHowWeDo.get"]);
    });

    $routes->group('services', function ($routes) {
        $routes->get('get', "Object\Services::get", ["as" => "object.services.get"]);
        $routes->get('getPage', "Object\Services::getPage", ["as" => "object.services.getPage"]);
        $routes->get('getBusinessAndRiskPage', "Object\Services::getBusinessAndRiskPage", ["as" => "object.services.getBusinessAndRiskPage"]);
        $routes->get('getITPage', "Object\Services::getITPage", ["as" => "object.services.getITPage"]);
        $routes->get('getPeoplePage', "Object\Services::getPeoplePage", ["as" => "object.services.getPeoplePage"]);
    });

    $routes->group('careers', function ($routes) {
        $routes->get('get', "Object\Careers::get", ["as" => "object.careers.get"]);
        $routes->get('getPageData', "Object\Careers::getPageData", ["as" => "object.careers.getPageData"]);
    });

    $routes->group('lines', function ($routes) {
        $routes->post('upload', "Object\Lines::upload", ["as" => "object.lines.upload"]);
        $routes->post('dumpUpload', "Object\Lines::dumpUpload", ["as" => "object.lines.dumpUpload"]);
        $routes->post('update/(:segment)', "Object\Lines::update/$1", ["as" => "object.lines.update"]);
    });

    $routes->group('webinars', function ($routes) {
        $routes->post('create', "Object\Webinars::create", ["as" => "object.webinars.create"]);
        $routes->get('get', "Object\Webinars::get", ["as" => "object.webinars.get"]);
    });

    $routes->group('presenters', function ($routes) {
        $routes->post('create/(:segment)', "Object\Presenters::create/$1", ["as" => "object.presenters.create"]);
        $routes->post('delete/(:segment)', "Object\Presenters::delete/$1", ["as" => "object.presenters.delete"]);
    });

    $routes->group('service_lines', function ($routes) {
        $routes->post("create/(:segment)", "Object\ServiceLines::create/$1", ['as' => 'object.service_lines.create']);
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
