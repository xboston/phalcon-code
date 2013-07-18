<?php

$view = new \Phalcon\Mvc\View();

//A trailing directory separator is required
$view->setViewsDir("../app/views/");

// Passing variables to the views, these will be created as local variables
$view->setVar("someProducts" , $products);
$view->setVar("someFeatureEnabled" , true);

//Start the output buffering
$view->start();

//Render all the view hierarchy related to the view products/list.phtml
$view->render("products" , "list");

//Finish the output buffering
$view->finish();

echo $view->getContent();

