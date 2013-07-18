<?php

  //Using a string redirect (internal/external)
$response->redirect("posts/index");
$response->redirect("http://en.wikipedia.org", true);
$response->redirect("http://www.example.com/new-location", true, 301);

//Making a redirection based on a named route
$response->redirect(array(
    "for" => "index-lang",
    "lang" => "jp",
    "controller" => "index"
));




