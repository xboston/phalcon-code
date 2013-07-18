<?php

$di = new Phalcon\DI();

//Using a string definition
$di->set('request' , 'Phalcon\Http\Request' , true);

//Using an anonymous function
$di->set(
    'request' ,
    function () {
        return new Phalcon\Http\Request();
    } ,
    true
);

$request = $di->getRequest();



