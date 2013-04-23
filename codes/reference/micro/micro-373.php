<?php

$app = new Phalcon\Mvc\Micro();

//Executed before every route executed
//Return false cancels the route execution
$app->before(function() use ($app) {
    if ($app['session']->get('auth') == false) {
        return false;
    }
    return true;
});

$app->map('/api/robots', function(){
    return array(
        'status' => 'OK'
    );
});

$app->after(function() use ($app) {
    //This is executed after the route is executed
    echo json_encode($app->getReturnedValue());
});

$app->finish(function() use ($app) {
    //This is executed when is the request has been served
});

