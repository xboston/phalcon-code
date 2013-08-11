<?php

/**
 * Shows the view to "edit" an existing product
 */
public function editAction($id)
{

    //...

    $product = Products::findFirstById($id);

    $this->tag->setDefault("id", $product->id);
    $this->tag->setDefault("product_types_id", $product->product_types_id);
    $this->tag->setDefault("name", $product->name);
    $this->tag->setDefault("price", $product->price);
    $this->tag->setDefault("active", $product->active);

}

