<?php

//Manipulating a resultset of complete objects
foreach ( Robots::find() as $robot ) {
    $robot->year = 2000;
    $robot->save();
}

