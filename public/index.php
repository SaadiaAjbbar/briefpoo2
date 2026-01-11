<?php

session_start();
require_once __DIR__ . '/../autoload.php';

use App\Core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');

$router->get('/login', 'AuthController@loginForm');
$router->post('/login', 'AuthController@login');

$router->get('/register', 'AuthController@registerForm');
$router->post('/register', 'AuthController@register');

$router->dispatch();

