<?php

// Query robots binding parameters with string placeholders
$conditions = "name = :name: AND type = :type:";

//Parameters whose keys are the same as placeholders
$parameters = array(
    "name" => "Robotina" ,
    "type" => "maid"
);

//Perform the query
$robots = Robots::find(
    array(
         $conditions ,
         "bind" => $parameters
    )
);

// Query robots binding parameters with integer placeholders
$conditions = "name = ?1 AND type = ?2";
$parameters = array( 1 => "Robotina" , 2 => "maid" );
$robots     = Robots::find(
    array(
         $conditions ,
         "bind" => $parameters
    )
);

// Query robots binding parameters with both string and integer placeholders
$conditions = "name = :name: AND type = ?1";

//Parameters whose keys are the same as placeholders
$parameters = array(
    "name" => "Robotina" ,
    1      => "maid"
);

//Perform the query
$robots = Robots::find(
    array(
         $conditions ,
         "bind" => $parameters
    )
);

