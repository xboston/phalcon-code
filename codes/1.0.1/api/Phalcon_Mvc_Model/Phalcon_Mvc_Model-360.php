<?php

 //How much are all robots?
 $sum = Robots::sum(array('column' => 'price'));
 echo "The total price of robots is ", $sum, "\n";

 //How much are mechanical robots?
 $sum = Robots::sum(array("type='mechanical'", 'column' => 'price'));
 echo "The total price of mechanical robots is  ", $sum, "\n";




