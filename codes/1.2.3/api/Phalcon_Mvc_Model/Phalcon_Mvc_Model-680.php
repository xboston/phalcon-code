<?php

$robot = Robots::findFirst("id=100");
$robot->delete();

foreach (Robots::find("type = 'mechanical'") as $robot) {
   $robot->delete();
}




