<?php

//Register a controller as a service
$di->set(
    'IndexController' ,
    function () {
        $component = new Component();

        return $component;
    } ,
    true
);

//Register a controller as a service
$di->set(
    'MyOtherComponent' ,
    function () {
        //Actually returns another component
        $component = new AnotherComponent();

        return $component;
    }
);

//Create an instance via the service container
$myComponent = $di->get('MyOtherComponent');

