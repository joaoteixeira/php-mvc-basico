<?php
//header('Content-Type: text/html; charset=utf-8');

define('__ROOT__', realpath('../'));

require __ROOT__ . '/vendor/autoload.php';

use Core\Application;
use Core\Route;

$route = new Route();
$route->register('/', 'HomeController', 'index');
$route->register('/contatos', 'ContatosController', 'index');

$app = new Application($route);

$app->run();