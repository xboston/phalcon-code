<?php

$di->set('crypt', function() {
    $crypt = new Phalcon\Crypt();
    $crypt->setKey('#1dj8$=dp?.ak//j1V$'); //Use your own key!
    return $crypt;
});

