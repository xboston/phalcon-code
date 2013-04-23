<?php

 //How many robots are there?
 $number = Robots::count();
 echo "There are ", $number, "\n";

 //How many mechanical robots are there?
 $number = Robots::count("type='mechanical'");
 echo "There are ", $number, " mechanical robots\n";




