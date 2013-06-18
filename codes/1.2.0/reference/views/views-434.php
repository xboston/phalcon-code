<?php

class ProductsController extends \Phalcon\Mvc\Controller
{

    public function listAction()
    {
        // Pick "views-dir/products/search" as view to render
        $this->view->pick("products/search");
    }

}

