<?php

$robot = Robots::findFirst(2);

// Robots model has a 1-n (hasMany)
// relationship to RobotsParts, then
$robotsParts = RobotsParts::find("robots_id = '" . $robot->id . "'");

// Only parts that match conditions
$robotsParts = RobotsParts::find(
    "robots_id = '" . $robot->id . "' AND created_at = '2012-03-15'"
);

$robotPart = RobotsParts::findFirst(1);

// RobotsParts model has a n-1 (belongsTo)
// relationship to RobotsParts then
$robot = Robots::findFirst("id = '" . $robotPart->robots_id . "'");


