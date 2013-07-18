<?php

/**
 * Shows the view to "edit" an existing product
 */
public
function editAction($id)
{

    //...

    $product = Products::findFirstById($id);

    Tag::setDefault("id" , $product->id);
    Tag::setDefault("product_types_id" , $product->product_types_id);
    Tag::setDefault("name" , $product->name);
    Tag::setDefault("price" , $product->price);
    Tag::setDefault("active" , $product->active);

}

