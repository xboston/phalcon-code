<?php

$router->add(
    "/admin/users/my-profile",
    array(
        "namespace"  => "Store\Admin",
        "controller" => "Users",
        "action"     => "profile",
    )
);

