<?php

//Creating a new robot
$robot = new Robots();
$robot->type = 'mechanical'
$robot->name = 'Astro Boy';
$robot->year = 1952;
$robot->save();

//Updating a robot name
$robot = Robots::findFirst("id=100");
$robot->name = "Biomass";
$robot->save();




