<?php

// First robot where type = "mechanical" and year = "1999"
$robot = Robots::findFirst(
    array(
         "type" => "mechanical" ,
         "year" => "1999"
    )
);

// All virtual robots ordered by name downward
$robots = Robots::find(
    array(
         "conditions" => array( "type" => "virtual" ) ,
         "sort"       => array( "name" => -1 )
    )
);

