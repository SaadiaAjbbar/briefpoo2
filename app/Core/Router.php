<?php

namespace App\Core;

class Router
{
    private array $routes = [];

    public function get(string $uri, string $action)
    {
        $this->routes['GET'][$uri] = $action;
    }
    
    public function post(string $uri, string $action)
    {
        $this->routes['POST'][$uri] = $action;
    }

    public function dispatch()
    {
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $method = $_SERVER['REQUEST_METHOD'];

        if (isset($this->routes[$method][$uri])) {

            [$controller, $methodName] =
                explode('@', $this->routes[$method][$uri]);

            $controllerClass = "App\\Controllers\\$controller";

            if (!class_exists($controllerClass)) {
                throw new \Exception("Controller $controllerClass not found");
            }

            $obj = new $controllerClass();

            if (!method_exists($obj, $methodName)) {
                throw new \Exception("Method $methodName not found");
            }

            $obj->$methodName();
            return;
        }

        require __DIR__ . '/../../views/pages/404.php';
    }
}
