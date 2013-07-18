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
         'className'  => 'SomeApp\SomeComponent' ,
         'properties' => array(
             array(
                 'name'  => 'response' ,
                 'value' => array( 'type' => 'service' , 'name' => 'response' )
             ) ,
             array(
                 'name'  => 'someFlag' ,
                 'value' => array( 'type' => 'parameter' , 'value' => true )
             )
         )
    )
);

