<?php

// Instantiate the Query
$query = new Phalcon\Mvc\Model\Query("SELECT * FROM Cars", $di);

// Execute the query returning a result if any
$cars = $query->execute();

