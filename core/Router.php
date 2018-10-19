<?php

namespace Core;

class Router
{
    protected $routes = [
        'GET' => [],
        'POST' => [],
    ];

    public static function load($file)
    {
        $router = new static;
        require $file;

        return $router;
    }

    public function direct($uri, $requestMethod)
    {
        if (array_key_exists($uri, $this->routes[$requestMethod])) {
            return $this->callAction(...explode('@', $this->routes[$requestMethod][$uri]));
        }
        throw new \Exception('No route defined');
    }

    protected function callAction($controllerName, $action)
    {
        $controllerFullName = "App\\Controller\\{$controllerName}";
        $controller = new $controllerFullName;
        if (!method_exists($controller, $action)) {
            throw new \Exception(
                "$controller does not reespond to the $action action"
            );

        }
        return $controller->$action();
    }

    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller;
    }

    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }
}
