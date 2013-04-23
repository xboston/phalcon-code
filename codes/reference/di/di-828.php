<?php

//Register a controller as a service
$di->set('IndexController', function() {
    $component = new Component();
    return $component;
}, true);

//Register a controller as a service
$di->set('MyOtherComponent', function() {
    //Actually returns another component
    $component = new AnotherComponent();
    return $component;
});

//Create a instance via the services container
$myComponent = $di->get('MyOtherComponent');

