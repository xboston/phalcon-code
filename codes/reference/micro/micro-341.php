
    <?php

    //Create a events manager
    $eventManager = \Phalcon\Events\Manager();

    //Listen all the application events
    $eventManager->attach('micro', function($event, $app) {

        if ($event->getType() == 'beforeExecuteRoute') {
            if ($app->session->get('auth') == false) {

                $app->flashSession->error("The user isn't authenticated");
                $app->response->redirect("/");

                //Return (false) stop the operation
                return false;
            }
        }

    });

    $app = new Phalcon\Mvc\Micro();

    //Bind the events manager to the app
    $app->setEventsManager($eventsManager);

