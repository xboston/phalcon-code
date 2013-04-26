<?php

$loader = new \Phalcon\Loader();

$loader->registerDirs(array(
    __DIR__ . '/models/'
))->register();

$app = new \Phalcon\Mvc\Micro();

$app->get('/products/find', function(){

    foreach (Products::find() as $product) {
        echo $product->name, '<br>';
    }

});

$app->handle();

