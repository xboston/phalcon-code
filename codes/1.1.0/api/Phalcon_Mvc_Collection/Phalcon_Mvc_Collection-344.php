<?php

 //How many robots are there?
 $robots = Robots::find();
 echo "There are ", count($robots), "\n";

 //How many mechanical robots are there?
 $robots = Robots::find(array(
     array("type" => "mechanical")
 ));
 echo "There are ", count($robots), "\n";

 //Get and print virtual robots ordered by name
 $robots = Robots::findFirst(array(
     array("type" => "virtual"),
     "order" => array("name" => 1)
 ));
 foreach ($robots as $robot) {
   echo $robot->name, "\n";
 }

 //Get first 100 virtual robots ordered by name
 $robots = Robots::find(array(
     array("type" => "virtual"),
     "order" => array("name" => 1),
     "limit" => 100
 ));
 foreach ($robots as $robot) {
   echo $robot->name, "\n";
 }




