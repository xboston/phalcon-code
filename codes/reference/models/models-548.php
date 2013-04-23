<?php

$robot = Robots::findFirst(2);
foreach ($robot->robotsParts as $robotPart) {
    echo $robotPart->parts->name, "\n";
}

