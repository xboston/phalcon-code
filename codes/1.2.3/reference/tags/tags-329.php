<?php

class ProductsController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
        $this->tag->setDefault("color", "Blue");
    }

}

