<?php

$eventsManager->attach(
    'db' ,
    function ($event , $connection) {

        //We stop the event if it is cancelable
        if ( $event->isCancelable() ) {
            //Stop the event, so other listeners will not be notified about this
            $event->stop();
        }

        //...

    }
);

