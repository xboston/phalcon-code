<?php

$di = new \Phalcon\DI\FactoryDefault();

$di->set('config', function() {
    return new \Phalcon\Config\Adapter\Ini("config.ini");
});

$app = new Phalcon\Mvc\Micro();

$app->setDI($di);

$app->get('/', function () use ($app) {
    //Read a setting from the config
    echo $app->config->app_name;
});

$app->post('/contact', function () use ($app) {
    $app->flash->success('Yes!, the contact was made!');
});

