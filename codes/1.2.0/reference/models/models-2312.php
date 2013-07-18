<?php

//Find a robot by its name
$robot = Robots::findFirst("theName = 'Voltron'");
echo $robot->theName , "\n";

//Get robots ordered by type
$robot = Robots::find(array( 'order' => 'theType DESC' ));
foreach ( $robots as $robot ) {
    echo 'Code: ' , $robot->code , "\n";
}

//Create a robot
$robot          = new Robots();
$robot->code    = '10101';
$robot->theName = 'Bender';
$robot->theType = 'Industrial';
$robot->theYear = 2999;
$robot->save();

