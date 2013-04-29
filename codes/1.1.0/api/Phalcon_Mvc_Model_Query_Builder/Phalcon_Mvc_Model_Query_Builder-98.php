<?php

$builder->join('Robots');
$builder->join('Robots', 'r.id = RobotsParts.robots_id');
$builder->join('Robots', 'r.id = RobotsParts.robots_id', 'r');
$builder->join('Robots', 'r.id = RobotsParts.robots_id', 'r', 'LEFT');




