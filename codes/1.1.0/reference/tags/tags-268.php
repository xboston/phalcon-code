<?php

// Creating a Select Tag with an empty option with default text
echo Phalcon\Tag::select(
    array(
        'productId',
        Products::find("type = 'vegetables'"),
        'using' => array('id', "name')
        'useEmpty' => true,
        'emptyText' => 'Please, choose one...',
        'emptyValue' => '@'
    ),

);

