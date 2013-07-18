<?php

$di->set(
    'router' ,
    function () {
        return include("../app/config/routes.php");
    }
);

