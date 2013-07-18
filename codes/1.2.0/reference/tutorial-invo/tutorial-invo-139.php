<?php

//Start the session the first time when some component request the session service
$di->set(
    'session' ,
    function () {
        $session = new Phalcon\Session\Adapter\Files();
        $session->start();

        return $session;
    }
);

