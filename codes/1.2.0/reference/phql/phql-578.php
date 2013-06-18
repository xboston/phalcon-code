<?php

//Getting a whole set
$robots = $this->modelsManager->createBuilder()
    ->from('Robots')
    ->join('RobotsParts')
    ->order('Robots.name')
    ->getQuery()
    ->execute();

//Getting the first row
$robots = $this->modelsManager->createBuilder()
    ->from('Robots')
    ->join('RobotsParts')
    ->order('Robots.name')
    ->getQuery()
    ->getSingleResult();

