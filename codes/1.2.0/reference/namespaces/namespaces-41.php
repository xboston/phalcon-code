<?php

$router->add(
    '/:namespace/admin/users/my-profile',
    array(
        'namespace"  => 1,
        'controller" => 'Users',
        'action"     => 'profile',
    )
);

