<?php

try {

    //Start a transaction
    $connection->begin();

    //Execute some SQL statements
    $connection->execute("DELETE `robots` WHERE `id` = 101");
    $connection->execute("DELETE `robots` WHERE `id` = 102");
    $connection->execute("DELETE `robots` WHERE `id` = 103");

    //Commit if everything goes well
    $connection->commit();

} catch(Exception $e) {
    //An exception has ocurred rollback the transaction
    $connection->rollback();
}

