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

$router->get('/logout', 'AuthController@logout');

$router->get('/author', 'AuthorController@index');

$router->get('/admin', 'AdminController@index');
$router->get('/admin/categories/create', 'AdminController@createCategoryForm');
$router->post('/admin/categories/store', 'AdminController@storeCategory');

$router->dispatch();

