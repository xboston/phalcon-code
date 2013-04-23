
    <?php

    $robotPart = new RobotParts();
    $robotPart->type = "head";

    $robot = new Robots();
    $robot->name = "WALL·E";
    $robot->created_at = date("Y-m-d");
    $robot->robotPart = $robotPart;

    $robot->save(); //Creates an implicit transaction to store both records

