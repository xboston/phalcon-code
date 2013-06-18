<?php

use \Phalcon\Db\Column as Column;

// Adding a new column
$connection->addColumn("robots", null,
    new Column("robot_type", array(
        "type"    => Column::TYPE_VARCHAR,
        "size"    => 32,
        "notNull" => true,
        "after"   => "name",
    ))
);

// Modifying an existing column
$connection->modifyColumn("robots", null, new Column("name", array(
    "type" => Column::TYPE_VARCHAR,
    "size" => 40,
    "notNull" => true,
)));

// Deleting the column "name"
$connection->deleteColumn("robots", null, "name");


