<?php

//This route makes a redirection to another route
$app->post('/old/welcome', function () use ($app) {
    $app->response->redirect("new/welcome");
});

$app->post('/new/welcome', function () use ($app) {
    echo 'This is the new Welcome';
});

