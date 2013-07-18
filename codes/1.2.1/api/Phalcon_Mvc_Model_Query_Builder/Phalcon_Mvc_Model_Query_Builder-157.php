<?php

$builder->where('name = "Peter"');
$builder->where('name = :name: AND id > :id:', array('name' => 'Peter', 'id' => 100));




