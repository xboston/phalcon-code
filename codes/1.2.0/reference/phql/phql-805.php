<?php

use Phalcon\Mvc\Model\Resultset\Simple as Resultset;

class Robots extends Phalcon\Mvc\Model
{
    public static function findByRawSql($conditions, $params=null)
    {
        // A raw SQL statement
        $sql = "SELECT * FROM robots WHERE $conditions";

        // Base model
        $robot = new Robots();

        // Execute the query
        return new Resultset(null, $robot, $robot->getReadConnection()->query($sql, $params));
    }
}

