<?php

include '../config.php';
include '../vendor/autoload.php';

if (DEBUG_MODE) {
    ini_set('display_errors', 0);
    ini_set('display_startup_errors', 0);
    //error_reporting(E_ALL);
}

$router = new Core\Router();
$launcher = new Core\Launcher();

$launcher->start($router->getRouteInfo());
