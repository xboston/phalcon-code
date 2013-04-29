<?php

//Совпадет, если HTTP метод - GET
$app->get('/api/products', "get_products");

//Совпадет, если HTTP метод - POST
$app->post('/api/products/add', "add_product");

//Совпадет, если HTTP метод - PUT
$app->put('/api/products/update/{id}', "update_product");

//Совпадет, если HTTP метод - DELETE
$app->put('/api/products/remove/{id}', "delete_product");

//Совпадет, если HTTP метод - OPTIONS
$app->options('/api/products/info/{id}', "info_product");

//Совпадет, если HTTP метод - PATCH
$app->patch('/api/products/update/{id}', "info_product");

//Совпадет, если HTTP метод - GET или POST
$app->map('/repos/store/refs',"action_product")->via(array('GET', 'POST'));


