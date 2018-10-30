<?php

define('__ROOT__', realpath('../'));

require __ROOT__ . '/vendor/autoload.php';

use Core\Application;
use Core\Route;

$app = new Application();

//Rotas da aplicação
Route::register('/', 'HomeController', 'index');

$app->run();
