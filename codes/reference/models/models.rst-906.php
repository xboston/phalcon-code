
    <?php

    // What is the average salary for all employees?
    $average = Employees::average(array("column" => "salary"));

    // What is the average salary for the Sales's area employees?
    $average = Employees::average(array(
        "column" => "salary",
        "conditions" => "area = 'Sales'"
    ));

