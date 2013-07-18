<?php

use Phalcon\DI,
    Phalcon\Db\Adapter\Pdo\Sqlite as Connection,
    Phalcon\Mvc\Model\Manager as ModelsManager,
    Phalcon\Mvc\Model\Metadata\Memory as MetaData,
    Phalcon\Mvc\Model;

$di = new DI();

//Setup a connection
$di->set('db', new Connection(array(
    "dbname" => "sample.db"
)));

//Set a models manager
$di->set('modelsManager', new ModelsManager());

//Use the memory meta-data adapter or other
$di->set('modelsMetadata', new MetaData());

//Create a model
class Robots extends Model
{

}

//Use the model
echo Robots::count();

