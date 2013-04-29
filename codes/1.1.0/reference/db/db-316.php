<?php

$eventsManager = new \Phalcon\Events\Manager();

$profiler = new \Phalcon\Db\Profiler();

//Listen all the database events
$eventsManager->attach('db', function($event, $connection) use ($profiler) {
    if ($event->getType() == 'beforeQuery') {
        //Start a profile with the active connection
        $profiler->startProfile($connection->getSQLStatement());
    }
    if ($event->getType() == 'afterQuery') {
        //Stop the active profile
        $profiler->stopProfile();
    }
});

//Assign the events manager to the connection
$connection->setEventsManager($eventsManager);

$sql = "SELECT buyer_name, quantity, product_name "
     . "FROM buyers "
     . "LEFT JOIN products ON buyers.pid = products.id";

// Execute a SQL statement
$connection->query($sql);

// Get the last profile in the profiler
$profile = $profiler->getLastProfile();

echo "SQL Statement: ", $profile->getSQLStatement(), "\n";
echo "Start Time: ", $profile->getInitialTime(), "\n";
echo "Final Time: ", $profile->getFinalTime(), "\n";
echo "Total Elapsed Time: ", $profile->getTotalElapsedSeconds(), "\n";

