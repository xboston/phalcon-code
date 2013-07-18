<?php

class SomeComponent
{

    /**
     * The instantiation of the connection is hardcoded inside
     * the component, therefore it's difficult replace it externally
     * or change its behavior
     */
    public function someDbTask()
    {
        $connection = new Connection(array(
            "host" => "localhost",
            "username" => "root",
            "password" => "secret",
            "dbname" => "invo"
        ));

        // ...
    }

}

$some = new SomeComponent();
$some->someDbTask();

