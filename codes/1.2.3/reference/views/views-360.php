<?php

class ProductsController extends \Phalcon\Mvc\Controller
{

    public function listAction()
    {
        // Pick "views-dir/products/search" as view to render
        $this->view->pick("products/search");

        // Pick "views-dir/products/list" as view to render
        $this->view->pick(array('products'));

        // Pick "views-dir/products/list" as view to render
        $this->view->pick(array(1 => 'search'));
    }

}

