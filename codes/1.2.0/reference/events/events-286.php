<?php

//The handler will only be executed if the event triggered is "beforeSomeTask"
$eventManager->attach(
    'my-component:beforeSomeTask' ,
    function ($event , $component) {
        //...
    }
);

