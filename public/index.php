<?php

require_once __DIR__ . '/../bootstrap/autoload.php';



session_start();

$router = new App\Core\Router();
$router->get('/', "HomeController@index");
$router->get("/books", "BookController@index");
$router->dispatch(); 