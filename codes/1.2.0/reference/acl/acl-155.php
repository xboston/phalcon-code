<?php

//Create an event manager
$eventsManager = new Phalcon\Events\Manager();

//Attach a listener for type "acl"
$eventsManager->attach("acl", function($event, $acl) {
    if ($event->getType() == 'beforeCheckAccess') {
         echo   $acl->getActiveRole(),
                $acl->getActiveResource(),
                $acl->getActiveAccess();
    }
});

$acl = new \Phalcon\Acl\Adapter\Memory();

//Setup the $acl
//...

//Bind the eventsManager to the acl component
$acl->setEventsManager($eventManagers);

