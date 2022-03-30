<?php

namespace Controller;

use Core\ControllerAbstract;

class News extends ControllerAbstract
{
    public function show(string $slug){
        $new = new \Model\News();
        $new->loadBySlug($slug);
        $template$this->twig
        // renderinsiu templeita ir siusiu naujienos objekta
        // atvaizdavimui.
    }
}