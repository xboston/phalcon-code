<?php

$robotsSimilar = RobotsSimilar::findFirst();

//Returns the related record based on the column (robots_id)
//Also as is a belongsTo it's only returning one record
//but the name 'getRobots' seems to imply that return more than one
$robot = $robotsSimilar->getRobots();

//but, how to get the related record based on the column (similar_robots_id)
//if both relationships have the same name?

