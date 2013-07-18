<?php

$builder->orWhere('name = "Peter"');
$builder->orWhere('name = :name: AND id > :id:' , array( 'name' => 'Peter' , 'id' => 100 ));




