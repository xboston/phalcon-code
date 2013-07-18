<?php

use \Phalcon\Db\Profiler as Profiler;
use \Phalcon\Db\Profiler\Item as Item;

class DbProfiler extends Profiler
{

    /**
     * Executed before the SQL statement will sent to the db server
     */
    public function beforeStartProfile(Item $profile)
    {
        echo $profile->getSQLStatement();
    }

    /**
     * Executed after the SQL statement was sent to the db server
     */
    public function afterEndProfile(Item $profile)
    {
        echo $profile->getTotalElapsedSeconds();
    }

}

//Create an EventsManager
$eventsManager = new Phalcon\Events\Manager();

//Create a listener
$dbProfiler = new DbProfiler();

//Attach the listener listening for all database events
$eventsManager->attach('db' , $dbProfiler);


