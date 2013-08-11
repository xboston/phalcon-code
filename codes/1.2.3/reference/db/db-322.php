<?php

try {

    //Start a transaction
    $connection->begin();

    //Execute some SQL statements
    $connection->execute("DELETE `robots` WHERE `id` = 101");

    try {

        //Start a nested transaction
        $connection->begin();

        //Execute these SQL statements into the nested transaction
        $connection->execute("DELETE `robots` WHERE `id` = 102");
        $connection->execute("DELETE `robots` WHERE `id` = 103");

        //Create a save point
        $connection->commit();

    } catch(Exception $e) {
        //An error has ocurred, release the nested transaction
        $connection->rollback();
    }

    //Continue, executing more SQL statements
    $connection->execute("DELETE `robots` WHERE `id` = 104");

    //Commit if everything goes well
    $connection->commit();

} catch(Exception $e) {
    //An exception has ocurred rollback the transaction
    $connection->rollback();
}

