<?php

// What is the average salary for all employees?
$average = Employees::average(array("column" => "salary"));

// What is the average salary for the Sales's area employees?
$average = Employees::average(array(
    "column" => "salary",
    "conditions" => "area = 'Sales'"
));

// Avoid SQL injections using bound parameters
$average = Employees::average(array(
    "column" => "age"
    "conditions" => "area > ?0"
    "bind" => array($area)
));

