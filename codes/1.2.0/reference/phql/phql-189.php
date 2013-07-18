<?php

$cars = Cars::find(array( "order" => "name" ));
foreach ( $cars as $car ) {
    echo "Name: " , $car->name , "\n";
}

