<?php

use Phalcon\Events\Manager as EventsManager;

$evManager = new EventsManager();

//Set up the events manager to collect responses
$evManager->collectResponses(true);

//Attach a listener
$evManager->attach(
    'custom:custom' ,
    function () {
        return 'first response';
    }
);

//Attach a listener
$evManager->attach(
    'custom:custom' ,
    function () {
        return 'second response';
    }
);

//Fire the event
$evManager->fire('custom:custom' , null);

//Get all the collected responses
print_r($evManager->getResponses());

