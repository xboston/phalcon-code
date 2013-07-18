<?php

$resultset = $this->modelsManager->createBuilder()->from('Robots')->join('RobotsParts')->limit(20)->orderBy('Robots.name')->getQuery()->execute();



