<?php

//Resolve the object externally instead of using a definition for it:
$router = new MyRouter();

//Pass the resolved object to the service registration
$di->set('router', $router);

