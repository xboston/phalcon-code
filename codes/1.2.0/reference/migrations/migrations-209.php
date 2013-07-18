<?php

class ProductsMigration_100 extends \Phalcon\Mvc\Model\Migration
{

    public function up()
    {
        //...
        self::$_connection->insert(
            "products" ,
            array( "Malabar spinach" , 14.50 ) ,
            array( "name" , "price" )
        );
    }

}

