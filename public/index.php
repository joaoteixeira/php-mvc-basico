<?php
header('Content-Type: text/html; charset=utf-8');

define('__ROOT__', realpath('../'));

require __ROOT__  . '/src/core/AutoLoad.php';

$autoload = new AutoLoad();

spl_autoload_register([$autoload, 'core']);

use Core\Application;
use Core\Route;

$route = new Route();
// $route->register('/', 'VeiculoController', 'index');
$route->register('/cars', 'VeiculoController', 'index');
$route->register('/go', 'VeiculoController', 'go');

$app = new Application($route);

$app->run(); 