<?php

class Registry
{

    /**
     * Returns the connection
     */
    public static function getConnection()
    {
       return new Connection(array(
            "host" => "localhost",
            "username" => "root",
            "password" => "secret",
            "dbname" => "invo"
        ));
    }

}

class SomeComponent
{

    protected $_connection;

    /**
     * Sets the connection externally
     */
    public function setConnection($connection)
    {
        $this->_connection = $connection;
    }

    public function someDbTask()
    {
        $connection = $this->_connection;

        // ...
    }

}

$some = new SomeComponent();

//Pass the connection defined in the registry
$some->setConnection(Registry::getConnection());

$some->someDbTask();

