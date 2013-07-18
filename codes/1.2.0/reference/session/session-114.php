<?php

$user = new Phalcon\Session\Bag('user');
$user->setDI($di);
$user->name = "Kimbra Johnson";
$user->age  = 22;


