<?php

$builder->innerJoin('Robots');
$builder->innerJoin('Robots', 'r.id = RobotsParts.robots_id');
$builder->innerJoin('Robots', 'r.id = RobotsParts.robots_id', 'r');
$builder->innerJoin('Robots', 'r.id = RobotsParts.robots_id', 'r', 'LEFT');




