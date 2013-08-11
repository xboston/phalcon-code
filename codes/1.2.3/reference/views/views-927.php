<?php

$view = new \Phalcon\Mvc\View\Simple();

//A trailing directory separator is required
$view->setViewsDir("../app/views/");

// Render a view and return its contents as a string
echo $view->render("templates/welcomeMail");

// Render a view passing parameters
echo $view->render("templates/welcomeMail", array(
    'email' => $email,
    'content' => $content
));

