<?php

// Creates the autoloader
$loader = new \Phalcon\Loader();

// Register some classes
$loader->registerClasses(
    array(
        "Some"         => "library/OtherComponent/Other/Some.php",
        "Example\Base" => "vendor/example/adapters/Example/BaseClass.php",
    )
);

// register autoloader
$loader->register();

// Requiring a class will automatically include the file it references
// in the associative array
// i.e. library/OtherComponent/Other/Some.php
$some = new Some();

