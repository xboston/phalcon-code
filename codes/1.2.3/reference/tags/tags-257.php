<?php

// Creating a Select Tag with an empty option with default text
echo $this->tag->select(
    array(
        'productId',
        Products::find("type = 'vegetables'"),
        'using' => array('id', "name"),
        'useEmpty' => true,
        'emptyText' => 'Please, choose one...',
        'emptyValue' => '@'
    ),

);

