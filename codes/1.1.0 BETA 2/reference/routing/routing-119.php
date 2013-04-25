<?php

$router->add(
    "/news/([0-9]{4})/([0-9]{2})/([0-9]{2})/:params",
    array(
        "controller" => "posts",
        "action"     => "show",
        "year"       => 1, // ([0-9]{4})
        "month"      => 2, // ([0-9]{2})
        "day"        => 3, // ([0-9]{2})
        "params"     => 4, // :params
    )
);

