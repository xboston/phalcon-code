<?php

$criteria->innerJoin('Robots');
$criteria->innerJoin('Robots', 'r.id = RobotsParts.robots_id');
$criteria->innerJoin('Robots', 'r.id = RobotsParts.robots_id', 'r');
$criteria->innerJoin('Robots', 'r.id = RobotsParts.robots_id', 'r', 'LEFT');




