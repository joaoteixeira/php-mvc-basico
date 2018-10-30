<?php

namespace Core;

use Core\Route;

class Session
{
    private const KEY_MESSAGE = 'app_flash_message';

    public function getFlashMessage()
    {
        if(!empty($_SESSION[self::KEY_MESSAGE]))
            return $_SESSION[self::KEY_MESSAGE];

        return null;
    }

    public static function flashMessage($content = '')
    {
        $_SESSION[self::KEY_MESSAGE] = $content;

        return $_SESSION[self::KEY_MESSAGE];
    }

    public function __destruct() {
       unset($_SESSION[self::KEY_MESSAGE]);
   }
}
