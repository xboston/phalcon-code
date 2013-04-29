<?php

//Receiving the data in the third parameter
$eventManager->attach('my-component', function($event, $component, $data) {
    print_r($data);
});

//Receiving the data from the event context
$eventManager->attach('my-component', function($event, $component) {
    print_r($event->getData());
});

