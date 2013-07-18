<?php

$di->set(
    'response' ,
    array(
         'className' => 'Phalcon\Http\Response'
    )
);

$di->set(
    'someComponent' ,
    array(
         'className' => 'SomeApp\SomeComponent' ,
         'arguments' => array(
             array( 'type' => 'service' , 'name' => 'response' ) ,
             array( 'type' => 'parameter' , 'value' => true )
         )
    )
);

