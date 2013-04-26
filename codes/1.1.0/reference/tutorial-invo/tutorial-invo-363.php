<?php

use \Phalcon\Events\Event;
use \Phalcon\Mvc\Dispatcher;

class Security extends Phalcon\Mvc\User\Plugin
{

    // ...

    public function beforeExecuteRoute(Event $event, Dispatcher $dispatcher)
    {
        // ...
    }

}

