<?php

$dependencyInjector = new Phalcon\DI();

$dependencyInjector->set(
    'modelsManager' ,
    function () {
        return new Phalcon\Mvc\Model\Manager();
    }
);

$robot = new Robots($dependencyInjector);



