<?php

use Phalcon\DI\FactoryDefault,
    Phalcon\Mvc\Micro,
    Phalcon\Config\Adapter\Ini as IniConfig;

$di = new FactoryDefault();

$di->set('config', function() {
    return new IniConfig("config.ini");
});

$app = new Micro();

$app->setDI($di);

$app->get('/', function () use ($app) {
    //Read a setting from the config
    echo $app->config->app_name;
});

$app->post('/contact', function () use ($app) {
    $app->flash->success('Yes!, the contact was made!');
});

