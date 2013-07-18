<?php

try {

    // Register autoloaders
    //...

    // Register services
    //...

    // Handle the request
    $application = new \Phalcon\Mvc\Application();
    $application->setDI($di);
    echo $application->handle()->getContent();

} catch ( \Phalcon\Exception $e ) {
    echo "PhalconException: " , $e->getMessage();
}

