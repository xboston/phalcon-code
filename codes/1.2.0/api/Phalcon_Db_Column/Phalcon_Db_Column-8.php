<?php

use Phalcon\Db\Column as Column;

//column definition
$column = new Column("id" , array(
                                 "type"          => Column::TYPE_INTEGER ,
                                 "size"          => 10 ,
                                 "unsigned"      => true ,
                                 "notNull"       => true ,
                                 "autoIncrement" => true ,
                                 "first"         => true
                            ));

//add column to existing table
$connection->addColumn("robots" , null , $column);



