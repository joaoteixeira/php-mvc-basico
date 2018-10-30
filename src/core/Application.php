<?php

namespace Core;

use Core\Route;

class Application
{

    protected $contoller;

    protected $action;

    protected $route;

    public function __construct()
    {
      session_start();
      $this->includeFiles();
    }

    public function run()
    {
      $path_info = isset($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO'] : '/';

      $route = Route::get($path_info);
      $this->instanceController($route->controller, $route->action);
    }

    public function call(Route $router){
      $this->instanceController($router->controller, $router->action);
    }

    private function instanceController($controller, $action)
    {
        if ($controller && $action) {
            $class = new \ReflectionClass("\App\Controllers\\{$controller}");
            $object = $class->newInstance();
            $object->$action();
        }
    }

    private function includeFiles()
    {
        include('Alias.php');
    }
}
