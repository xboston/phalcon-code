<?php

use Phalcon\Events\Manager as EventsManager;

$eventsManager = new EventsManager();

$application->setEventsManager($eventsManager);

$eventsManager->attach(
    "application",
    function($event, $application) {
        // ...
    }
);

