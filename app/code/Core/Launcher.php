<?php

namespace Core;

class Launcher
{
    public function start($routeInfo)
    {
        list($controller, $method, $param) = $routeInfo;
        $controller = ucfirst($controller);
        $controller = '\Controller\\'.$controller;
        //       $controller = \Controller\Users;
        $controllerObject = new $controller();
        //        $ob = new \Controller\Users();
        $controllerObject->$method($param);
    }
}
