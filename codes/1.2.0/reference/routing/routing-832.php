<?php

//These routes simulate real URIs
$testRoutes = array(
    '/' ,
    '/index' ,
    '/index/index' ,
    '/index/test' ,
    '/products' ,
    '/products/index/' ,
    '/products/show/101' ,
);

$router = new Phalcon\Mvc\Router();

//Add here your custom routes
//...

//Testing each route
foreach ( $testRoutes as $testRoute ) {

    //Handle the route
    $router->handle($testRoute);

    echo 'Testing ' , $testRoute , '<br>';

    //Check if some route was matched
    if ( $router->wasMatched() ) {
        echo 'Controller: ' , $router->getControllerName() , '<br>';
        echo 'Action: ' , $router->getActionName() , '<br>';
    } else {
        echo 'The route wasn\'t matched by any route<br>';
    }
    echo '<br>';

}

