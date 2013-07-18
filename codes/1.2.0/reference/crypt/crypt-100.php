<?php

$di->set(
    'crypt' ,
    function () {

        $crypt = new Phalcon\Crypt();

        //Set a global encryption key
        $crypt->setKey('%31.1e$i86e$f!8jz');

        return $crypt;
    } ,
    true
);

