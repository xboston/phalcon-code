<?php

//Set up the flash service
$di->set(
    'flash' ,
    function () {
        return new \Phalcon\Flash\Direct();
    }
);

