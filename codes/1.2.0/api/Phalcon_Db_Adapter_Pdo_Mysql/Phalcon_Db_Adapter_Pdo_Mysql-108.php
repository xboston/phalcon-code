<?php

//Querying data
$resultset = $connection->query("SELECT * FROM robots WHERE type='mechanical'");
$resultset = $connection->query("SELECT * FROM robots WHERE type=?", array("mechanical"));




