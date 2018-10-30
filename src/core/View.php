<?php

namespace Core;

class View
{
    private static $path = __ROOT__ . '/resources/view/';

    public static function go($view, $variables = [])
    {
        self::_include($view, $variables);
    }

    public static function error404()
    {
        self::_include('error/404');
    }

    private static function _include($view, $variables = [])
    {
        foreach ($variables as $key => $value)
            ${$key} = $value;

        $pathPHP = self::$path . $view . '.php';
        $pathHTML = self::$path . $view . '.html';

        if(file_exists($pathPHP))
            include_once($pathPHP);
        else if(file_exists($pathHTML))
            include_once($pathHTML);
        else
            header('HTTP/1.0 404 Not Found', true, 404);

        exit;
    }
}
