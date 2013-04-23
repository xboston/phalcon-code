
    <?php

    /**
     * Shows the view to "edit" an existing product
     */
    public function editAction($id)
    {

        //...

        $product = Products::findFirst(array(
            'id = ?0',
            'bind' => array($id)
        ));

        Tag::displayTo("id", $product->id);
        Tag::displayTo("product_types_id", $product->product_types_id);
        Tag::displayTo("name", $product->name);
        Tag::displayTo("price", $product->price);
        Tag::displayTo("active", $product->active);

    }

