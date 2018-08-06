<?php

namespace Core;

class Route {

    private $routes = [];

    public $controller;

    public $action;

    public function register($route, $controller, $action)
    {
        $this->routes[$route] = [ $controller, $action ];

        return $this;
    }

    public function get(): array
    {
        return $this->rotas;
    }

    public function geti($route): self
    {
        $route = $this->routes[$route];

        if($route) {
            $this->action = $route[1];
            $this->controller = $route[0];
        }

        return $this;
    }
    
}