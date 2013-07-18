<?php

$validation = new Phalcon\Validation();

$validation->add(
        'name' ,
        new PresenceOf(array(
                            'message' => 'The name is required'
                       ))
    )->add(
        'email' ,
        new PresenceOf(array(
                            'message' => 'The email is required'
                       ))
    );

//Filter any extra space
$validation->setFilters('name' , 'trim');
$validation->setFilters('email' , 'trim');

