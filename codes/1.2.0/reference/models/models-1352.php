<?php

class Robots extends Phalcon\Mvc\Model
{

    public function initialize()
    {

        $eventsManager = new \Phalcon\Events\Manager();

        //Attach an anonymous function as a listener for "model" events
        $eventsManager->attach(
            'model' ,
            function ($event , $robot) {
                if ( $event->getType() == 'beforeSave' ) {
                    if ( $robot->name == 'Scooby Doo' ) {
                        echo "Scooby Doo isn't a robot!";

                        return false;
                    }
                }

                return true;
            }
        );

        //Attach the events manager to the event
        $this->setEventsManager($eventsManager);
    }

}

$robot       = new Robots();
$robot->name = 'Scooby Doo';
$robot->year = 1969;
$robot->save();

