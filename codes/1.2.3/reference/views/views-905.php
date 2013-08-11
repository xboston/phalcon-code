<?php

$view = new \Phalcon\Mvc\View();

echo $view->getRender('products', 'list',
    array(
        "someProducts" => $products,
        "someFeatureEnabled" => true
    ),
    function($view) {
        //Set any extra options here
        $view->setViewsDir("../app/views/");
        $view->setRenderLevel(Phalcon\Mvc\View::LEVEL_LAYOUT)
    }
);

