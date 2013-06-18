<?php

// Creates the autoloader
$loader = new \Phalcon\Loader();

//Register some prefixes
$loader->registerPrefixes(
    array(
       "Example_Base"    => "vendor/example/base/",
       "Example_Adapter" => "vendor/example/adapter/",
       "Example_"         => "vendor/example/",
    )
);

// register autoloader
$loader->register();

// The required class will automatically include the
// file vendor/example/adapter/Some.php
$some = new Example_Adapter_Some();

