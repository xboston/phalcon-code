<?php

$robot = new Robots();
$robot->name = "Robby the Robot";
$robot->created_at = "1956-07-21";
if ($robot->save() == false) {
    echo "Cannot save robot";
}

