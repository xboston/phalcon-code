<?php

$di = new Phalcon\DI();

$dispatcher = new Phalcon\CLI\Dispatcher();

$dispatcher->setDI($di);

$dispatcher->setTaskName('posts');
$dispatcher->setActionName('index');
$dispatcher->setParams(array());

$handle = $dispatcher->dispatch();



