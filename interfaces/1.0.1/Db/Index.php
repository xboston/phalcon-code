<?php
namespace Phalcon\Db{
    class Index implements \Phalcon\Db\IndexInterface
    {
        public function __construct($indexName, $columns){}
        public function getName(){}
        public function getColumns(){}
        public static function __set_state($data){}
    }
}