<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');

// URL Shortener
$routes->match(["get", "post"], "url-shortener", "URLController::urlShortener");

// Handel Short URLs
$routes->get("/(:segment)", "URLController::handelShortURLs/$1"); //{:any} {:segment}