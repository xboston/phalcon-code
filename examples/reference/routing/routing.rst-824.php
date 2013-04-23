
    <?php

    $di['router'] = function() {

        //Use the annotations router
        $router = new \Phalcon\Mvc\Router\Annotations(false);

        //Read the annotations from Backend\Controllers\ProductsController if the uri starts with /api/products
        $router->addModuleResource('backend', 'Products', '/api/products');

        return $router;
    };

