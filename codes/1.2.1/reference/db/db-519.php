<?php

use Phalcon\Logger,
    Phalcon\Events\Manager as EventsManager,
    Phalcon\Logger\Adapter\File as Logger;

$eventsManager = new EventsManager();

$logger = new Logger("app/logs/db.log");

//Listen all the database events
$eventsManager->attach('db', function($event, $connection) use ($logger) {
    if ($event->getType() == 'beforeQuery') {
        $logger->log($connection->getSQLStatement(), Logger::INFO);
    }
});

//Assign the eventsManager to the db adapter instance
$connection->setEventsManager($eventsManager);

//Execute some SQL statement
$connection->insert(
    "products",
    array("Hot pepper", 3.50),
    array("name", "price")
);

