<?php

//What is the maximum robot id?
$id = Robots::maximum(array( 'column' => 'id' ));
echo "The maximum robot id is: " , $id , "\n";

//What is the maximum id of mechanical robots?
$sum = Robots::maximum(array( "type='mechanical'" , 'column' => 'id' ));
echo "The maximum robot id of mechanical robots is " , $id , "\n";




