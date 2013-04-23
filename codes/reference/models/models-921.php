<?php

// What is the oldest age of all employees?
$age = Employees::maximum(array("column" => "age"));

// What is the oldest of employees from the Sales area?
$age = Employees::maximum(array(
    "column" => "age",
    "conditions" => "area = 'Sales'"
));

// What is the lowest salary of all employees?
$salary = Employees::minimum(array("column" => "salary"));

