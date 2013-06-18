<?php

$data = Article::aggregate(array(
    array(
        '$project' => array('category' => 1)
    ),
    array(
        '$group' => array(
            '_id' => array('category' => '$category'),
            'id' => array('$max' => '$_id')
        )
    )
));

