<?php

$di->set('encryption', function() {

    $encryption = new Phalcon\Crypt();

    //Set a global encryption key
    $encryption->setKey('311e86effdada283219971cca5ad5a19');

    return $encryption;
}, true);

