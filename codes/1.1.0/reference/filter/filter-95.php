<?php

$filter = new \Phalcon\Filter();

// returns "Hello"
$filter->filter("<h1>Hello</h1>", "striptags");

// returns "Hello"
$filter->filter("  Hello   ", "trim");


