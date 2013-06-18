<?php

//Passing a resultset as data
$paginator = new \Phalcon\Paginator\Adapter\Model(
    array(
        "data"  => Products::find(),
        "limit" => 10,
        "page"  => $currentPage
    )
);

//Passing an array as data
$paginator = new \Phalcon\Paginator\Adapter\Model(
    array(
        "data"  => array(
            array('id' => 1, 'name' => 'Artichoke'),
            array('id' => 2, 'name' => 'Carrots'),
            array('id' => 3, 'name' => 'Beet'),
            array('id' => 4, 'name' => 'Lettuce'),
            array('id' => 5, 'name' => '')
        ),
        "limit" => 2,
        "page"  => $currentPage
    )
);

//Passing a querybuilder as data

$builder = $this->modelsManager->createBuilder()
    ->columns('id, name')
    ->from('Robots')
    ->orderBy('name');

$paginator = new Phalcon\Paginator\Adapter\QueryBuilder(array(
    "builder" => $builder,
    "limit"=> 20,
    "page" => 1
));


