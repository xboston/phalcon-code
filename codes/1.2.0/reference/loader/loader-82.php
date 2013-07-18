<?php

// Creates the autoloader
$loader = new \Phalcon\Loader();

// Register some directories
$loader->registerDirs(
    array(
         "library/MyComponent/" ,
         "library/OtherComponent/Other/" ,
         "vendor/example/adapters/" ,
         "vendor/example/"
    )
);

// register autoloader
$loader->register();

// The required class will automatically include the file from
// the first directory where it has been located
// i.e. library/OtherComponent/Other/Some.php
$some = new Some();

