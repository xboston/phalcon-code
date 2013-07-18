<?php

//Create the Dependency Injector Container
$di = new Phalcon\DI();

//By its class name
$di->set("request" , 'Phalcon\Http\Request');

//Using an anonymous function, the instance will be lazy loaded
$di->set(
    "request" ,
    function () {
        return new Phalcon\Http\Request();
    }
);

//Registering an instance directly
$di->set("request" , new Phalcon\Http\Request());

//Using an array definition
$di->set(
    "request" ,
    array(
         "className" => 'Phalcon\Http\Request'
    )
);

