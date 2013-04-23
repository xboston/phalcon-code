<?php

class ProductsController extends ControllerBase
{

    public function initialize()
    {
        //Set the document title
        Tag::setTitle('Manage your product types');
        parent::initialize();
    }

    //...

}

