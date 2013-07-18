<?php

use Phalcon\Events\Event , Phalcon\Mvc\Dispatcher , Phalcon\Mvc\User\Plugin;

class Security extends Plugin
{

    // ...

    public function beforeExecuteRoute(Event $event , Dispatcher $dispatcher)
    {
        // ...
    }

}

