<?php

$eventsManager->attach('db:beforeQuery', function($event, $connection) {

    //Check for malicious words in SQL statements
    if (preg_match('/DROP|ALTER/i', $connection->getSQLStatement())) {
        // DROP/ALTER operations aren't allowed in the application,
        // this must be a SQL injection!
        return false;
    }

    //It's ok
    return true;
});

