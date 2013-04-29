<?php

// Manually applying the filter
$filter = new Phalcon\Filter();

$email  = $filter->sanitize($_POST["user_email"], "email");

// Manually applying the filter to the value
$filter = new Phalcon\Filter();
$email  = $filter->sanitize($request->getPost("user_email"), "email");

// Automatically applying the filter
$email = $request->getPost("user_email", "email");

// Setting a default value if the param is null
$email = $request->getPost("user_email", "email", "some@example.com");

// Setting a default value if the param is null without filtering
$email = $request->getPost("user_email", null, "some@example.com");


