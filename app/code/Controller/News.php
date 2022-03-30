<?php

namespace Controller;

class News
{
    public function show($slug){
        $new = new \Model\News();
        $new->loadBySlug($slug);
        // renderinsiu templeita ir siusiu naujienos objekta
        // atvaizdavimui.
    }
}