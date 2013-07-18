<?php

//What's the first robot in robots table?
$robot = Robots::findFirst();
echo "The robot name is " , $robot->name;

//What's the first mechanical robot in robots table?
$robot = Robots::findFirst("type='mechanical'");
echo "The first mechanical robot name is " , $robot->name;

//Get first virtual robot ordered by name
$robot = Robots::findFirst(array( "type='virtual'" , "order" => "name" ));
echo "The first virtual robot name is " , $robot->name;




