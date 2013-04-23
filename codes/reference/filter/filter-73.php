<?php

class ProductsController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {

    }

    public function showAction($productId)
    {
        $productId = $this->filter->sanitize($productId, "int");
    }

}

