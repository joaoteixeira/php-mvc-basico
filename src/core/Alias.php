<?php

if (!function_exists('flash_message')) {
    function flash_message() {
        return (new \Core\Session)->getFlashMessage();
    }
}
