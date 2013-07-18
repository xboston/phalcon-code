<?php

//Registering a dispatcher
$di->set(
    'dispatcher' ,
    function () {
        $dispatcher = new \Phalcon\Mvc\Dispatcher();
        $dispatcher->setDefaultNamespace('Store\Admin\Controllers');

        return $dispatcher;
    }
);

