<?php

class IndexController extends Phalcon\Mvc\Controller
{
    public function index()
    {

        //Add some local CSS resources
        $this->assets
            ->addCss('css/style.css')
            ->addCss('css/index.css');

        //and some local javascript resources
        $this->assets
            ->addJs('js/jquery.js')
            ->addJs('js/bootstrap.min.js');

    }
}

