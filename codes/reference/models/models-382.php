<?php

use \Phalcon\Db\Column;

//Bind parameters
$parameters = array(
    "name" => "Robotina",
    "year" => 2008
);

//Casting Types
$types = array(
    "name" => Column::BIND_PARAM_STR,
    "year" => Column::BIND_PARAM_INT
);

// Query robots binding parameters with string placeholders
$conditions = "name = :name: AND year = :year:";
$robots = Robots::find(array(
    $conditions,
    "bind" => $parameters,
    "bindTypes" => $types
));

