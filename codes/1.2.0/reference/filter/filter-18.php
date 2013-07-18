<?php

$filter = new \Phalcon\Filter();

// returns "someone@example.com"
$filter->sanitize("some(one)@exa\mple.com" , "email");

// returns "hello"
$filter->sanitize("hello<<" , "string");

// returns "100019"
$filter->sanitize("!100a019" , "int");

// returns "100019.01"
$filter->sanitize("!100a019.01a" , "float");


