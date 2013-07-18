<?php

//Create an Events Manager
$eventsManager = new Phalcon\Events\Manager();

//Create the MyComponent instance
$myComponent = new MyComponent();

//Bind the eventsManager to the instance
$myComponent->setEventsManager($myComponent);

//Attach the listener to the EventsManager
$eventsManager->attach('my-component' , new SomeListener());

//Execute methods in the component
$myComponent->someTask();

