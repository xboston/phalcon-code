<?php

//Register a controller as a service
$di->set(
    'IndexController' ,
    function () {
        $component = new Component();

        return $component;
    }
);

