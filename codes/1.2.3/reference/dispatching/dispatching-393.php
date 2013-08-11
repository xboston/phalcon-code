<?php

use Phalcon\Text,
    Phalcon\Mvc\Dispatcher as MvcDispatcher,
    Phalcon\Events\Manager as EventsManager;

$di->set('dispatcher', function() {

    //Create an EventsManager
    $eventsManager = new EventsManager();

    $eventsManager->attach("dispatch:beforeDispatchLoop", function($event, $dispatcher) {

        //Possible controller class name
        $controllerName =   Text::camelize($dispatcher->getControllerName()) . 'Controller';

        //Possible method name
        $actionName = $dispatcher->getActionName() . 'Action';

        try {

            //Get the reflection for the method to be executed
            $reflection = new \ReflectionMethod($controllerName, $actionName);

            //Check parameters
            foreach ($reflection->getParameters() as $parameter) {

                //Get the expected model name
                $className = $parameter->getClass()->name;

                //Check if the parameter expects a model instance
                if (is_subclass_of($className, 'Phalcon\Mvc\Model')) {

                    $model = $className::findFirstById($dispatcher->getParams()[0]);

                    //Override the parameters by the model instance
                    $dispatcher->setParams(array($model));
                }
            }

        } catch (\Exception $e) {
            //An exception has ocurred, maybe the class or action does not exist?
        }

    });

    $dispatcher = new MvcDispatcher();
    $dispatcher->setEventsManager($eventsManager);

    return $dispatcher;
});

