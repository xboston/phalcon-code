<?php

$criteria->join('Robots');
$criteria->join('Robots', 'r.id = RobotsParts.robots_id');
$criteria->join('Robots', 'r.id = RobotsParts.robots_id', 'r');
$criteria->join('Robots', 'r.id = RobotsParts.robots_id', 'r', 'LEFT');




