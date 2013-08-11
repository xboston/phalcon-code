<?php

//Get the headers bag
$headers = $response->getHeaders();

//Get a header by its name
$contentType = $response->getHeaders()->get("Content-Type");

