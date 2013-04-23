<?php

$di = new Phalcon\DI();

$dispatcher = new Phalcon\Mvc\Dispatcher();

  $dispatcher->setDI($di);

$dispatcher->setControllerName('posts');
$dispatcher->setActionName('index');
$dispatcher->setParams(array());

$controller = $dispatcher->dispatch();



