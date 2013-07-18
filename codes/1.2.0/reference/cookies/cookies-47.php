<?php

$di->set(
    'cookies' ,
    function () {
        $cookies = new Phalcon\Http\Response\Cookies();
        $cookies->setEncryption(false);

        return $cookies;
    }
);

