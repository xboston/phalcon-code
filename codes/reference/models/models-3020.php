<?php

$di = new Phalcon\DI();

//Setup a connection
$di->set('db', new \Phalcon\Db\Adapter\Pdo\Sqlite(array(
    "dbname" => "sample.db"
)));

//Set a models manager
$di->set('modelsManager', new \Phalcon\Mvc\Model\Manager());

//Use the memory meta-data adapter or other
$di->set('modelsMetadata', new \Phalcon\Mvc\Model\Metadata\Memory());

class Robots extends Phalcon\Mvc\Model
{

}

echo Robots::count();

