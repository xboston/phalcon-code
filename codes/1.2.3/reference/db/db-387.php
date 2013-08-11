<?php

use Phalcon\Events\Manager as EventsManager,
    \Phalcon\Db\Adapter\Pdo\Mysql as Connection;

$eventsManager = new EventsManager();

//Listen all the database events
$eventsManager->attach('db', $dbListener);

$connection = new Connection(array(
    "host" => "localhost",
    "username" => "root",
    "password" => "secret",
    "dbname" => "invo"
));

//Assign the eventsManager to the db adapter instance
$connection->setEventsManager($eventsManager);

