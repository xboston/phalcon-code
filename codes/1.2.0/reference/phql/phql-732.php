<?php

//Passing parameters in the query construction
$robots = $this->modelsManager->createBuilder()->from('Robots')->where('name = :name:' , array( 'name' => $name ))->andWhere('type = :type:' , array( 'type' => $type ))->getQuery()->execute();

//Passing parameters in query execution
$robots = $this->modelsManager->createBuilder()->from('Robots')->where('name = :name:')->andWhere('type = :type:')->getQuery()->execute(array( 'name' => $name , 'type' => $type ));

