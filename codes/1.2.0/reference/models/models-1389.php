<?php

//Registering the modelsManager service
$di->setShared('modelsManager', function() {

    $eventsManager = new \Phalcon\Events\Manager();

    //Attach an anonymous function as a listener for "model" events
    $eventsManager->attach('model', function($event, $model){

        //Catch events produced by the Robots model
        if (get_class($model) == 'Robots') {

            if ($event->getType() == 'beforeSave') {
                if ($modle->name == 'Scooby Doo') {
                    echo "Scooby Doo isn't a robot!";
                    return false;
                }
            }

        }
        return true;
    });

    //Setting a default EventsManager
    $modelsManager = new ModelsManager();
    $modelsManager->setEventsManager($eventsManager);
    return $modelsManager;
});

