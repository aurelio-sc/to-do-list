<?php

require_once __DIR__ . '/vendor/autoload.php';

use CoffeeCode\Router\Router;

$router = new Router(url());

/**
 * routes
 * The controller must be in the namespace Test\Controller
 * this produces routes for route, route/$id, route/{$id}/profile, etc.
 */
$router->namespace("ToDoList\System\Controllers");

// $router->get("/route", "Controller:method");
// $router->post("/route/{id}", "Controller:method");
// $router->put("/route/{id}/profile", "Controller:method");
// $router->patch("/route/{id}/profile/{photo}", "Controller:method");
// $router->delete("/route/{id}", "Controller:method");

$router->get('/', 'SignInController:index');
$router->post('/user/signin', 'SignInController:processSignIn');
$router->get('/user/signup', 'SignUpController:index');
$router->post('/user/signup/process', 'SignUpController:processSignUp');

/**
 * group by routes and namespace
 * this produces routes for /admin/route and /admin/route/$id
 * The controller must be in the namespace Dash\Controller
 */
$router->group("admin")->namespace("Dash");

$router->get("/route", "Controller:method");
$router->post("/route/{id}", "Controller:method");

/**
 * sub group
 */
$router->group("admin/support");

$router->get("/tickets", "Controller:method");
$router->post("/ticket/{id}", "Controller:method");

/**
 * Group Error
 * This monitors all Router errors. Are they: 400 Bad Request, 404 Not Found, 405 Method Not Allowed and 501 Not Implemented
 */
$router->group("error")->namespace("Test");
$router->get("/{errcode}", "Coffee:notFound");

/**
 * This method executes the routes
 */
$router->dispatch();

/*
 * Redirect all errors
 */
if ($router->error()) {
    $router->redirect("/error/{$router->error()}");
}