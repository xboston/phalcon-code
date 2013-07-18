<?php

//Making a redirection to the default URI
$response->redirect();

//Making a redirection using the local base URI
$response->redirect("posts/index");

//Making a redirection to an external URL
$response->redirect("http://en.wikipedia.org" , true);

//Making a redirection specifyng the HTTP status code
$response->redirect("http://www.example.com/new-location" , true , 301);

