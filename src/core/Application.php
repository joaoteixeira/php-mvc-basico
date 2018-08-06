<?php

namespace Core;

use Route;

class Application {

    protected $contoller;

    protected $action;

    protected $route;

    public function __construct($route)
    {
        $this->route = $route;
    }

    public function run()
    {
        // var_dump($_SERVER);
        $controller = null;
        $action = null;
        $path_info = isset($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO'] : null;

        if(!$path_info) {
            $route = $this->route->geti('/');
            $this->instanceController($route->controller, $route->action);
        }


        if(array_key_exists($path_info, $this->route->get())) {
            $path = $this->route->get()[$path_info];

            $controller = $path[0];
            $action = $path[1];
        }

        $this->instanceController($controller, $action);
    }
    
    private function instanceController($controller, $action)
    {
        if($controller && $action) {
            $classe = new \ReflectionClass("\App\Controller\\$controller");
            $objeto = $classe->newInstance();
            $objeto->$action();
        }
    }

    // private function setController($path)
    // {
    //     $this->controller = $this->route->get()['\\'][0];
    //     $this->action = $this->route->get()['\\'][0];
    // }
}