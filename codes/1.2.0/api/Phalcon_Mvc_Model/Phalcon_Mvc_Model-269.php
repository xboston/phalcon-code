<?php

//How many robots are there?
$robots = Robots::find();
echo "There are " , count($robots) , "\n";

//How many mechanical robots are there?
$robots = Robots::find("type='mechanical'");
echo "There are " , count($robots) , "\n";

//Get and print virtual robots ordered by name
$robots = Robots::find(array( "type='virtual'" , "order" => "name" ));
foreach ( $robots as $robot ) {
    echo $robot->name , "\n";
}

//Get first 100 virtual robots ordered by name
$robots = Robots::find(array( "type='virtual'" , "order" => "name" , "limit" => 100 ));
foreach ( $robots as $robot ) {
    echo $robot->name , "\n";
}




