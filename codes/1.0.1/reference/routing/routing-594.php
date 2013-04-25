<?php

//Set 404 paths
$router->notFound(array(
    "controller" => "index",
    "action" => "route404"
));

