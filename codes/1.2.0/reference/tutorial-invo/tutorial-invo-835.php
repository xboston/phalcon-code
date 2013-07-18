<?php

/**
 * Creates a product based on the data entered in the "new" action
 */
public
function createAction()
{

    $products = new Products();

    $products->id               = $this->request->getPost("id" , "int");
    $products->product_types_id = $this->request->getPost("product_types_id" , "int");
    $products->name             = $this->request->getPost("name" , "striptags");
    $products->price            = $this->request->getPost("price" , "double");
    $products->active           = $this->request->getPost("active");

    //...

}

