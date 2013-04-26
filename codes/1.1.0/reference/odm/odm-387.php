<?php

//Registering the collectionManager service
$di->set('collectionManager', function() {

    $eventsManager = new Phalcon\Events\Manager();

    // Attach an anonymous function as a listener for "model" events
    $eventsManager->attach('collection', function($event, $model) {
        if (get_class($model) == 'Robots') {
            if ($event->getType() == 'beforeSave') {
                if ($model->name == 'Scooby Doo') {
                    echo "Scooby Doo isn't a robot!";
                    return false;
                }
            }
        }
        return true;
    });

    // Setting a default EventsManager
    $modelsManager = new Phalcon\Mvc\Collection\Manager();
    $modelsManager->setEventsManager($eventsManager);
    return $modelsManager;

}, true);

