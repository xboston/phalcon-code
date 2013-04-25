<?php
namespace Phalcon\Db{
    abstract class Reference implements \Phalcon\Db\ReferenceInterface
    {
        public function __construct($referenceName, $definition){}
        public function getName(){}
        public function getSchemaName(){}
        public function getReferencedSchema(){}
        public function getColumns(){}
        public function getReferencedTable(){}
        public function getReferencedColumns(){}
        public static function __set_state($data){}
    }
}