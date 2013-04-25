<?php

// Find record with _id = "5087358f2d42b8c3d15ec4e2"
$robot = Robots::findById("5087358f2d42b8c3d15ec4e2");

// Prints "Bender"
echo $robot->name;

