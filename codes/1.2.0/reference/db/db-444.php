<?php

$eventsManager = new Phalcon\Events\Manager();

$logger = new \Phalcon\Logger\Adapter\File("app/logs/db.log");

//Listen all the database events
$eventsManager->attach(
    'db' ,
    function ($event , $connection) use ($logger) {
        if ( $event->getType() == 'beforeQuery' ) {
            $logger->log($connection->getSQLStatement() , \Phalcon\Logger::INFO);
        }
    }
);

//Assign the eventsManager to the db adapter instance
$connection->setEventsManager($eventsManager);

//Execute some SQL statement
$connection->insert(
    "products" ,
    array( "Hot pepper" , 3.50 ) ,
    array( "name" , "price" )
);

