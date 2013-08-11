<?php

//Create the Dependency Injector Container
$di = new Phalcon\DI();

//By its class name
$di["request"] = 'Phalcon\Http\Request';

//Using an anonymous function, the instance will be lazy loaded
$di["request"] = function() {
    return new Phalcon\Http\Request();
};

//Registering an instance directly
$di["request"] = new Phalcon\Http\Request();

//Using an array definition
$di["request"] = array(
    "className" => 'Phalcon\Http\Request'
);

