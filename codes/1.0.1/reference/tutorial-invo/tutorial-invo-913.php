<?php

/**
 * Updates a product based on the data entered in the "edit" action
 */
public function saveAction()
{

    //...

    //Find the product to update
    $product = Products::findFirst(array(
        'id = ?0',
        'bind' => array($this->request->getPost("id"))
    ));
    if (!$product) {
        $this->flash->error("products does not exist ".$id);
        return $this->forward("products/index");
    }

    //... assign the values to the object and store it

}

