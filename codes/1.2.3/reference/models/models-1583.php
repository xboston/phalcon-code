<?php

use Phalcon\Mvc\Model,
    Phalcon\Events\Manager as EventsManager;

class Robots extends Model
{

    public function initialize()
    {

        $eventsManager = new EventsManager();

        //Attach an anonymous function as a listener for "model" events
        $eventsManager->attach('model', function($event, $robot) {
            if ($event->getType() == 'beforeSave') {
                if ($robot->name == 'Scooby Doo') {
                    echo "Scooby Doo isn't a robot!";
                    return false;
                }
            }
            return true;
        });

        //Attach the events manager to the event
        $this->setEventsManager($eventsManager);
    }

}

