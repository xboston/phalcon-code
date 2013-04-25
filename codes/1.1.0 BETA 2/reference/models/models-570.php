<?php

$robot = Robots::findFirst();
$robotsParts = $robot->getRobotsParts(); // all the related records in RobotsParts
$robotsParts = $robot->getRobotsParts(array('limit' => 5)); // passing parameters

