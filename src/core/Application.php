<?php

namespace Core;

use Route;

class Application
{

    protected $contoller;

    protected $action;

    protected $route;

    public function __construct($route)
    {
        $this->route = $route;
    }

    public function run()
    {
        $controller = null;
        $action = null;
        $path_info = isset($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO'] : '/';

        $route = $this->route->get($path_info);
        $this->instanceController($route->controller, $route->action);

    }

    private function instanceController($controller, $action)
    {
        if ($controller && $action) {
            $class = new \ReflectionClass("\App\Controllers\\{$controller}");
            $object = $class->newInstance();
            $object->$action();
        }
    }

    // private function setController($path)
    // {
    //     $this->controller = $this->route->get()['\\'][0];
    //     $this->action = $this->route->get()['\\'][0];
    // }
}