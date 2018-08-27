<?php

namespace Core;

class View
{

    public static function go($view, $variables = [])
    {
        foreach ($variables as $key => $value)
            ${$key} = $value;

        $path = __ROOT__ . '/resources/view/';

        include $path . $view . '.php';
    }
}