<?php

// Creates the autoloader
$loader = new \Phalcon\Loader();

//Register some namespaces
$loader->registerNamespaces(
    array(
         "Example\Base"    => "vendor/example/base/" ,
         "Example\Adapter" => "vendor/example/adapter/" ,
         "Example"         => "vendor/example/" ,
    )
);

// register autoloader
$loader->register();

// The required class will automatically include the
// file vendor/example/adapter/Some.php
$some = new Example\Adapter\Some();

