 $di->setShared('console', $console);
 
 try {
    // handle incoming arguments
    $console->handle($arguments);
}

