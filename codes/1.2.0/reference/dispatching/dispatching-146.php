<?php

// Forward flow to another action in the current controller
$this->dispatcher->forward(
    array(
         "action" => "search"
    )
);

// Forward flow to another action in the current controller
// passing parameters
$this->dispatcher->forward(
    array(
         "action" => "search" ,
         "params" => array( 1 , 2 , 3 )
    )
);


