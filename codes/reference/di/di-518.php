<?php

//Register a service 'logger' with a class name and its parameters
$di->set('logger', array(
    'className' => 'Phalcon\Logger\Adapter\File',
    'arguments' => array(
        array(
            'type' => 'parameter',
            'value' => '../apps/logs/error.log'
        )
    )
));

//Using an anonymous function
$di->set('logger', function() {
    return new \Phalcon\Logger\Adapter\File('../apps/logs/error.log');
});

