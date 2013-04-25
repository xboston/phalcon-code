<?php

$eventsManager = new Phalcon\Events\Manager();

//Attach an anonymous function as a listener for "model" events
$eventsManager->attach('collection', function($event, $robot) {
    if ($event->getType() == 'beforeSave') {
        if ($robot->name == 'Scooby Doo') {
            echo "Scooby Doo isn't a robot!";
            return false;
        }
    }
    return true;
});

$robot = new Robots();
$robot->setEventsManager($eventsManager);
$robot->name = 'Scooby Doo';
$robot->year = 1969;
$robot->save();

