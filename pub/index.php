<?php

include '../config.php';
include '../vendor/autoload.php';

$router = new Core\Router();
$louncher = new Core\Launcher();

$louncher->start($router->getRouteInfo());