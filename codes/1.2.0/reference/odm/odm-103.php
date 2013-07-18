<?php

$robot       = Robots::findFirst(
    array(
         array( 'name' => 'Astroy Boy' )
    )
);
$robot->name = "Voltron";
$robot->save();

