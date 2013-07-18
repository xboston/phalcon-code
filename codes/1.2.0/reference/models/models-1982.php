<?php

use Phalcon\Mvc\ModelInterface , Phalcon\Mvc\Model\BehaviorInterface;

class Blameable extends Behavior implements BehaviorInterface
{

    public function notify($eventType , $model)
    {
        switch ( $eventType ) {

            case 'afterCreate':
            case 'afterDelete':
            case 'afterUpdate':


                $userName = // ... get the current user from session

                    //Store in a log the username - event type and primary key
                    file_put_contents('logs/blamable-log.txt' , $userName . ' ' . $eventType . ' ' . $model->id);

                break;

            default:
                /* ignore the rest of events */
        }
    }

}

