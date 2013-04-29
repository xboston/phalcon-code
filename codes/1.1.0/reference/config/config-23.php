<?php

$settings = array(
    "database" => array(
        "adapter"  => "Mysql",
        "host"     => "localhost",
        "username" => "scott",
        "password" => "cheetah",
        "dbname"     => "test_db",
    ),
     "app" => array(
        "controllersDir" => "../app/controllers/",
        "modelsDir"      => "../app/models/",
        "viewsDir"       => "../app/views/",
    ),
    "mysetting" => "the-value"
);

$config = new \Phalcon\Config($settings);

echo $config->app->controllersDir, "\n";
echo $config->database->username, "\n";
echo $config->mysetting, "\n";

