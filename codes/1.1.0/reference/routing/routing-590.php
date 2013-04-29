<?php

// Указание действия для 404 страницы
$router->notFound(array(
    "controller" => "index",
    "action" => "route404"
));

