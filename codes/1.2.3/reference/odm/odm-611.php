<?php

$robots = Robots::find(array(
    array("type" => "mechanical")
));
foreach ($robots as $robot) {
    if ($robot->delete() == false) {
        echo "Sorry, we can't delete the robot right now: \n";
        foreach ($robot->getMessages() as $message) {
            echo $message, "\n";
        }
    } else {
        echo "The robot was deleted successfully!";
    }
}

