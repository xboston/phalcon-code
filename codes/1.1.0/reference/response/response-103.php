<?php

//Making a redirection based on a named route
$response->redirect(array(
    "for" => "index-lang",
    "lang" => "jp",
    "controller" => "index"
));

