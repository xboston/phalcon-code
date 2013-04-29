<?php

//Isolating the session data
$di->set('session', function(){

    //All variables created will prefixed with "my-app-1"
    $session = new Phalcon\Session\Adapter\Files(
        array(
            'uniqueId' => 'my-app-1'
        )
    );

    $session->start();

    return $session;
});

