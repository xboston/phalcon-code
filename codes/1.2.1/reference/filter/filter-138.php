<?php

$filter = new \Phalcon\Filter();

//Using an anonymous function
$filter->add('md5', function($value) {
    return preg_replace('/[^0-9a-f]/', '', $value);
});

//Sanitize with the "md5" filter
$filtered = $filter->sanitize($possibleMd5, "md5");

