<?php

$robot = Robots::findFirst(
    array(
        "type = 'virtual'",
        "order" => "name DESC",
        "limit" => 30
    )
);

$robots = Robots::find(
    array(
        "conditions" => "type = ?1",
        "bind"       => array(1 => "virtual")
    )
);

