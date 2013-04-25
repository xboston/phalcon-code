<?php

$robot = Robots::findFirst();
$robot->delete();

foreach(Robots::find() as $robot){
   $robot->delete();
}




