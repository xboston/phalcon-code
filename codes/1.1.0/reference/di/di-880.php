<?php

//Register the service
$di->set('myClass', 'MyClass');

//Resolve the service (also $myClass->setDi($di) is automatically called)
$myClass = $di->get('myClass');

