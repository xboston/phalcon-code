<?php

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



