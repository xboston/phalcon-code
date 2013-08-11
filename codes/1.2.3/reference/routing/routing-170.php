<?php

$router->add(
    "/documentation/{chapter}/{name}.{type:[a-z]+}",
    array(
        "controller" => "documentation",
        "action"     => "show"
    )
);

