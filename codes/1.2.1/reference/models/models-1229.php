<?php

$robot       = new Robots();
$robot->type = "mechanical";
$robot->name = "Astro Boy";
$robot->year = 1952;

//This record only must be created
if ($robot->create() == false) {
    echo "Umh, We can't store robots right now: \n";
    foreach ($robot->getMessages() as $message) {
        echo $message, "\n";
    }
} else {
    echo "Great, a new robot was created successfully!";
}

