<?php

namespace Core;

class View {

    public static function go($view, $variables = [])
    {
        foreach($variables as $key => $value)
            ${$key} = $value;

        $pathView = __ROOT__ . DIRECTORY_SEPARATOR . 'resources' . DIRECTORY_SEPARATOR . 'view/';

        include $pathView . $view . '.php';
    }
}