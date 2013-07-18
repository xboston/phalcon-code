<?php

$loader = new \Phalcon\Loader();
$loader->registerDirs(
    array(
         '../app/controllers/' ,
         '../app/models/'
    )
)->register();

