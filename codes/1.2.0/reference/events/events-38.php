<?php

use Phalcon\Events\Manager as EventsManager , Phalcon\Db\Adapter\Pdo\Mysql as DbAdapter;

$eventsManager = new EventsManager();

//Create a database listener
$dbListener = new MyDbListener();

//Listen all the database events
$eventsManager->attach('db' , $dbListener);

$connection = new DbAdapter(array(
                                 "host"     => "localhost" ,
                                 "username" => "root" ,
                                 "password" => "secret" ,
                                 "dbname"   => "invo"
                            ));

//Assign the eventsManager to the db adapter instance
$connection->setEventsManager($eventsManager);

//Send a SQL command to the database server
$connection->query("SELECT * FROM products p WHERE p.status = 1");

