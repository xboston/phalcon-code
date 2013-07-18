<?php

$robot = Robots::findFirst(2);

// Robots model has a 1-n (hasMany)
// relationship to RobotsParts then
$robotsParts = $robot->robotsParts;

// Only parts that match conditions
$robotsParts = $robot->getRobotsParts("created_at = '2012-03-15'");

// Or using bound parameters
$robotsParts = $robot->getRobotsParts(
    array(
         "created_at = :date:" ,
         "bind" => array( "date" => "2012-03-15" )
    )
);

$robotPart = RobotsParts::findFirst(1);

// RobotsParts model has a n-1 (belongsTo)
// relationship to RobotsParts then
$robot = $robotPart->robots;

