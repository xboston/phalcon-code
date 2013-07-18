<?php

class ProductsController extends Phalcon\Mvc\Controller
{

    public function saveAction()
    {

        //Do some save stuff...

        //Then show the list view
        $this->view->pick("products/list");
    }
}




