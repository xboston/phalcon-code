<?php

$robot = Robots::findFirst(3);
$robot->name = "RoboCop";
$robot->save();

