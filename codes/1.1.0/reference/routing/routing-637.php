<?php

$router->add(
    "/{language:[a-z]{2}}/:controller[/]{0,1}",
    array(
        "controller" => 2,
        "action"     => "index"
    )
);

