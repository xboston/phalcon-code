<?php

$robot = Robots::findFirst(11);
if ( $robot != false ) {
    if ( $robot->delete() == false ) {
        echo "Sorry, we can't delete the robot right now: \n";
        foreach ( $robot->getMessages() as $message ) {
            echo $message , "\n";
        }
    } else {
        echo "The robot was deleted successfully!";
    }
}

