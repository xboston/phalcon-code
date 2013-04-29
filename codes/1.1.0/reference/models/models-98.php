<?php

// Find record with id = 3
$robot = Robots::findFirst(3);

// Печатать "Terminator"
echo $robot->name;

