<?php

//Register the service
$di->set('myClass' , 'MyClass');

//Resolve the service (NOTE: $myClass->setDi($di) is automatically called)
$myClass = $di->get('myClass');

