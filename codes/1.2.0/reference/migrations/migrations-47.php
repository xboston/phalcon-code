<?php

use Phalcon\Db\Column as Column;
use Phalcon\Db\Index as Index;
use Phalcon\Db\Reference as Reference;

class ProductsMigration_100 extends \Phalcon\Mvc\Model\Migration
{

    public function up()
    {
        $this->morphTable(
            "products" ,
            array(
                 "columns"    => array(
                     new Column("id" , array(
                                            "type"          => Column::TYPE_INTEGER ,
                                            "size"          => 10 ,
                                            "unsigned"      => true ,
                                            "notNull"       => true ,
                                            "autoIncrement" => true ,
                                            "first"         => true ,
                                       )) ,
                     new Column("product_types_id" , array(
                                                          "type"     => Column::TYPE_INTEGER ,
                                                          "size"     => 10 ,
                                                          "unsigned" => true ,
                                                          "notNull"  => true ,
                                                          "after"    => "id" ,
                                                     )) ,
                     new Column("name" , array(
                                              "type"    => Column::TYPE_VARCHAR ,
                                              "size"    => 70 ,
                                              "notNull" => true ,
                                              "after"   => "product_types_id" ,
                                         )) ,
                     new Column("price" , array(
                                               "type"    => Column::TYPE_DECIMAL ,
                                               "size"    => 16 ,
                                               "scale"   => 2 ,
                                               "notNull" => true ,
                                               "after"   => "name" ,
                                          )) ,
                 ) ,
                 "indexes"    => array(
                     new Index("PRIMARY" , array( "id" )) ,
                     new Index("product_types_id" , array( "product_types_id" ))
                 ) ,
                 "references" => array(
                     new Reference("products_ibfk_1" , array(
                                                            "referencedSchema"  => "invo" ,
                                                            "referencedTable"   => "product_types" ,
                                                            "columns"           => array( "product_types_id" ) ,
                                                            "referencedColumns" => array( "id" ) ,
                                                       ))
                 ) ,
                 "options"    => array(
                     "TABLE_TYPE"      => "BASE TABLE" ,
                     "ENGINE"          => "InnoDB" ,
                     "TABLE_COLLATION" => "utf8_general_ci" ,
                 )
            )
        );
    }

}

