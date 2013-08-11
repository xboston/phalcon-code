<?php

try {

    // Register autoloaders
    //...

    // Register services
    //...

    // Handle the request
    $application = new \Phalcon\Mvc\Application($di);

    echo $application->handle()->getContent();

} catch (\Exception $e) {
    echo "Exception: ", $e->getMessage();
}

