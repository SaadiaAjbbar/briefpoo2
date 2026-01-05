<?php

require_once __DIR__ . '/../bootstrap/autoload.php';

use App\Core\Router;

session_start();

$router = new Router();
$router->get('/', "HomeController@index");
$router->get("/books", "BookController@index");
$router->dispatch();