<?php

$builder->andWhere('name = "Peter"');
$builder->andWhere('name = :name: AND id > :id:' , array( 'name' => 'Peter' , 'id' => 100 ));




