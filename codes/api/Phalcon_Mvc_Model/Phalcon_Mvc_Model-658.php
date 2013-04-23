<?php

//Updating a robot name
$robot = Robots::findFirst("id=100");
$robot->name = "Biomass";
$robot->update();




