<?php

//Register a controller as a service
$di->set('IndexController', function() {
    $component = new Component();
    return $component;
});

    //Register a namespaced controller as a service
    $di->set('Backend\Controllers\IndexController', function() {
        $component = new Component();
        return $component;
    });

