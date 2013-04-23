<?php

//Returns value from $_REQUEST["user_email"] without sanitizing
$userEmail = $request->get("user_email");

//Returns value from $_REQUEST["user_email"] with sanitizing
$userEmail = $request->get("user_email", "email");




