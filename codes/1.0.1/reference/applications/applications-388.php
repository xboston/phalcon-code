<?php

$eventsManager = new Phalcon\Events\Manager();

$application->setEventsManager($eventsManager);

$eventsManager->attach(
    "application",
    function($event, $application) {
        // ...
    }
);

