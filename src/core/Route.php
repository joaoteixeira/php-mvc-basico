<?php

namespace Core;

class Route
{
    public static function register($route, $controller, $action)
    {
        $_SESSION['app_routes'][$route] = ['controller' => $controller, 'action' => $action];
    }

    public static function get($route)
    {
        if(isset($_SESSION['app_routes'][$route]))
          return (object) $_SESSION['app_routes'][$route];

        View::error404();
    }

    public static function redirect($route)
    {
      $router = self::get($route);

      if(!$router)
        View::error404();

      header("Location: http://{$_SERVER['HTTP_HOST']}{$route}");

    }

}
