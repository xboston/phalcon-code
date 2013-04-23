<?php

// How much are the salaries of all employees?
$total = Employees::sum(array("column" => "salary"));

// How much are the salaries of all employees in the Sales area?
$total = Employees::sum(array(
    "column"     => "salary",
    "conditions" => "area = 'Sales'"
));

// Generate a grouping of the salaries of each area
$group = Employees::sum(array(
    "column" => "salary",
    "group"  => "area"
));
foreach ($group as $row) {
   echo "The sum of salaries of the ", $row->area, " is ", $row->sumatory;
}

// Generate a grouping of the salaries of each area ordering
// salaries from higher to lower
$group = Employees::sum(array(
    "column" => "salary",
    "group"  => "area",
    "order"  => "sumatory DESC"
));

