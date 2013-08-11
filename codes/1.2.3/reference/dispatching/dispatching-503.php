<?php

use Phalcon\Mvc\Dispatcher,
    Phalcon\Events\Event,
    Phalcon\Mvc\Dispatcher\Exception as DispatchException;

class ExceptionsPlugin
{
    public function beforeException(Event $event, Dispatcher $dispatcher, $exception)
    {

        //Handle 404 exceptions
        if ($exception instanceof DispatchException) {
            $dispatcher->forward(array(
                'controller' => 'index',
                'action' => 'show404'
            ));
            return false;
        }

        //Handle other exceptions
        $dispatcher->forward(array(
            'controller' => 'index',
            'action' => 'show503'
        ));

        return false;
    }
}

