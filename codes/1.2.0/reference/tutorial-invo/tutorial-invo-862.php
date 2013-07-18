<?php

/**
 * Creates a product based on the data entered in the "new" action
 */
public
function createAction()
{

    //...

    if ( !$products->create() ) {

        //The store failed, the following messages were produced
        foreach ( $products->getMessages() as $message ) {
            $this->flash->error((string) $message);
        }

        return $this->forward("products/new");

    } else {
        $this->flash->success("Product was created successfully");

        return $this->forward("products/index");
    }

}

