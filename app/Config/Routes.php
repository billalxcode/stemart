<?php

namespace Config;

use CodeIgniter\Router\RouteCollection;

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
//$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');

$routes->post("login", 'Auth::login');

$routes->group("products", function (RouteCollection $routes) {
    $routes->get("", "Product::index");
    $routes->get("(:any)", "Product::detail/$1");
}); 

$routes->group('/admin', function (RouteCollection $routes) {
    $routes->get("", "Admin\Dashboard::index", ['filter' => 'adminfilter']);
    $routes->get("logout", "Admin\Auth::logout", ['filter' => 'adminfilter']);
    
    $routes->get("auth", 'Admin\Auth::login');
    $routes->post("auth", 'Admin\Auth::login');

    $routes->post("logout", "Admin\Auth::logout", ['filter' => 'adminfilter']);

    $routes->group('products', ['filter' => 'adminfilter'], function (RouteCollection $routes) {
        $routes->get("", "Admin\Product::index");
        $routes->get("create", "Admin\Product::create");
        $routes->post("save", "Admin\Product::save");
        $routes->post('delete', 'Admin\Product::delete');
    });

    $routes->group("category", ['filter' => 'adminfilter'], function (RouteCollection $routes) {
        $routes->get("", "Admin\Category::index");
        $routes->post("save", "Admin\Category::save");
        $routes->post("delete", "Admin\Category::delete");
    });

    $routes->group("customer", ['filter' => 'adminfilter'], function (RouteCollection $routes) {
        $routes->get("", "Admin\Customer::index");
        $routes->post("changeStatus", "Admin\Customer::changeStatus");
    });

    $routes->group('orders', ['filter' => 'adminfilter'], function (RouteCollection $routes) {
        $routes->get("", "Admin\Order::manage");
        $routes->post("delete", 'Admin\Order::delete');
    });

    $routes->group('transaction', ['filter' => 'adminfilter'], function (RouteCollection $routes) {
        $routes->get("", "Admin\Transaction::index");
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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
