<?php

class ProductsController extends ControllerBase
{

    public function initialize()
    {
        //Set the document title
        $this->tag->setTitle('Manage your product types');
        parent::initialize();
    }

    //...

}

