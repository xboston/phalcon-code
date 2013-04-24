<?php

//Creating a new robot
$robot = new Robots();
$robot->type = 'mechanical';
$robot->name = 'Astro Boy';
$robot->year = 1952;
$robot->create();

  //Passing an array to create
  $robot = new Robots();
  $robot->create(array(
      'type' => 'mechanical',
      'name' => 'Astroy Boy',
      'year' => 1952
  ));




