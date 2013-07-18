<?php

//Using a standard foreach
$robots = Robots::find(array( "type='virtual'" , "order" => "name" ));
foreach ( $robots as $robot ) {
    echo $robot->name , "\n";
}

//Using a while
$robots = Robots::find(array( "type='virtual'" , "order" => "name" ));
$robots->rewind();
while ( $robots->valid() ) {
    $robot = $robots->current();
    echo $robot->name , "\n";
    $robots->next();
}



