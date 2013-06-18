<?php

// Getting a request instance
$request = new \Phalcon\Http\Request();

// Check whether the request was made with method POST
if ($request->isPost() == true) {

    // Check whether the request was made with Ajax
    if ($request->isAjax() == true) {
        echo "Request was made using POST and AJAX";
    }
}

