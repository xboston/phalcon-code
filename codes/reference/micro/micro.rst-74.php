
    <?php

    //Matches if the HTTP method is GET
    $app->get('/api/products', "get_products");

    //Matches if the HTTP method is POST
    $app->post('/api/products/add', "add_product");

    //Matches if the HTTP method is PUT
    $app->put('/api/products/update/{id}', "update_product");

    //Matches if the HTTP method is DELETE
    $app->put('/api/products/remove/{id}', "delete_product");

    //Matches if the HTTP method is OPTIONS
    $app->options('/api/products/info/{id}', "info_product");

    //Matches if the HTTP method is PATCH
    $app->patch('/api/products/update/{id}', "info_product");

    //Matches if the HTTP method is GET or POST
    $app->map('/repos/store/refs')->via(array('GET', 'POST'));


