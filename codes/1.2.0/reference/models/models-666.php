<?php

$robot = Robots::findFirst(2);
echo "The robot has " , $robot->countRobotsParts() , " parts\n";

