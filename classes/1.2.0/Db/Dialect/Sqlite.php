<?php
namespace Phalcon\Db\Dialect{

    abstract class Sqlite extends \Phalcon\Db\Dialect implements \Phalcon\Db\DialectInterface
    {
        public function getColumnDefinition($column){}
        public function addColumn($tableName, $schemaName, $column){}
        public function modifyColumn($tableName, $schemaName, $column){}
        public function dropColumn($tableName, $schemaName, $columnName){}
        public function addIndex($tableName, $schemaName, $index){}
        public function dropIndex($tableName, $schemaName, $indexName){}
        public function addPrimaryKey($tableName, $schemaName, $index){}
        public function dropPrimaryKey($tableName, $schemaName){}
        public function addForeignKey($tableName, $schemaName, $reference){}
        public function dropForeignKey($tableName, $schemaName, $referenceName){}
        protected function _getTableOptions(){}
        public function createTable($tableName, $schemaName, $definition){}
        public function dropTable($tableName, $schemaName, $ifExists = NULL){}
        public function createView($viewName, $definition, $schemaName){}
        public function dropView($viewName, $schemaName, $ifExists = NULL){}
        public function tableExists($tableName, $schemaName = NULL){}
        public function viewExists($viewName, $schemaName = NULL){}
        public function describeColumns($table, $schema = NULL){}
        public function listTables($schemaName = NULL){}
        public function listViews($schemaName = NULL){}
        public function describeIndexes($table, $schema = NULL){}
        public function describeIndex($indexName){}
        public function describeReferences($table, $schema = NULL){}
        public function tableOptions($table, $schema = NULL){}
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