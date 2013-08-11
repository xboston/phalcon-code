<?php
namespace Phalcon\Db{

    abstract class Dialect
    {
        public function limit($sqlQuery, $number){}
        public function forUpdate($sqlQuery){}
        public function sharedLock($sqlQuery){}
        public function getColumnList($columnList){}
        public function getSqlExpression($expression, $escapeChar = NULL){}
        public function getSqlTable($table, $escapeChar = NULL){}
        public function select($definition){}
        public function supportsSavepoints(){}
        public function supportsReleaseSavepoints(){}
        public function createSavepoint($name){}
        public function releaseSavepoint($name){}
        public function rollbackSavepoint($name){}
    }
}