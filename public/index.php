<?php
//ini_set('display_errors', 1);
//error_reporting(E_ALL);

session_start();
require_once __DIR__ . '/../autoload.php';

use App\Core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');
$router->get('/articles', 'ArticleController@show');

$router->dispatch();
