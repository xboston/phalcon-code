<?php

$di->set('response', array(
    'className' => 'Phalcon\Http\Response'
));

$di->set('someComponent', array(
    'className' => 'SomeApp\SomeComponent',
    'calls' => array(
        array(
            'method' => 'setResponse',
            'arguments' => array(
                array('type' => 'service', 'name' => 'response'),
            )
        ),
        array(
            'method' => 'setFlag',
            'arguments' => array(
                array('type' => 'parameter', 'value' => true)
            )
        )
    )
));

