<?php
namespace Phalcon\Db\Adapter\Pdo{

    abstract class Postgresql extends \Phalcon\Db\Adapter\Pdo implements \Phalcon\Events\EventsAwareInterface,\Phalcon\Db\AdapterInterface
    {
        public function connect($descriptor = NULL){}
        public function describeColumns($table, $schema = NULL){}
        public function useExplicitIdValue(){}
        public function getDefaultIdValue(){}
        public function supportSequences(){}
        public function __construct($descriptor){}
        public function prepare($sqlStatement){}
        public function executePrepared($statement, $placeholders, $dataTypes){}
        public function query($sqlStatement, $bindParams = NULL, $bindTypes = NULL){}
        public function execute($sqlStatement, $bindParams = NULL, $bindTypes = NULL){}
        public function affectedRows(){}
        public function close(){}
        public function escapeIdentifier($identifier){}
        public function escapeString($str){}
        public function convertBoundParams($sql, $params){}
        public function lastInsertId($sequenceName = NULL){}
        public function begin(){}
        public function rollback(){}
        public function commit(){}
        public function getTransactionLevel(){}
        public function isUnderTransaction(){}
        public function getInternalHandler(){}
        public function setEventsManager($eventsManager){}
        public function getEventsManager(){}
        public function setDialect($dialect){}
        public function getDialect(){}
        public function fetchOne($sqlQuery, $fetchMode = NULL, $bindParams = NULL, $bindTypes = NULL){}
        public function fetchAll($sqlQuery, $fetchMode = NULL, $bindParams = NULL, $bindTypes = NULL){}
        public function insert($table, $values, $fields = NULL, $dataTypes = NULL){}
        public function update($table, $fields, $values, $whereCondition = NULL, $dataTypes = NULL){}
        public function delete($table, $whereCondition = NULL, $placeholders = NULL, $dataTypes = NULL){}
        public function getColumnList($columnList){}
        public function limit($sqlQuery, $number){}
        public function tableExists($tableName, $schemaName = NULL){}
        public function viewExists($viewName, $schemaName = NULL){}
        public function forUpdate($sqlQuery){}
        public function sharedLock($sqlQuery){}
        public function createTable($tableName, $schemaName, $definition){}
        public function dropTable($tableName, $schemaName = NULL, $ifExists = NULL){}
        public function createView($viewName, $definition, $schemaName = NULL){}
        public function dropView($viewName, $schemaName = NULL, $ifExists = NULL){}
        public function addColumn($tableName, $schemaName, $column){}
        public function modifyColumn($tableName, $schemaName, $column){}
        public function dropColumn($tableName, $schemaName, $columnName){}
        public function addIndex($tableName, $schemaName, $index){}
        public function dropIndex($tableName, $schemaName, $indexName){}
        public function addPrimaryKey($tableName, $schemaName, $index){}
        public function dropPrimaryKey($tableName, $schemaName){}
        public function addForeignKey($tableName, $schemaName, $reference){}
        public function dropForeignKey($tableName, $schemaName, $referenceName){}
        public function getColumnDefinition($column){}
        public function listTables($schemaName = NULL){}
        public function listViews($schemaName = NULL){}
        public function describeIndexes($table, $schema = NULL){}
        public function describeReferences($table, $schema = NULL){}
        public function tableOptions($tableName, $schemaName = NULL){}
        public function createSavepoint($name){}
        public function releaseSavepoint($name){}
        public function rollbackSavepoint($name){}
        public function setNestedTransactionsWithSavepoints($nestedTransactionsWithSavepoints){}
        public function isNestedTransactionsWithSavepoints(){}
        public function getNestedTransactionSavepointName(){}
        public function getDescriptor(){}
        public function getConnectionId(){}
        public function getSQLStatement(){}
        public function getRealSQLStatement(){}
        public function getSQLVariables(){}
        public function getSQLBindTypes(){}
        public function getType(){}
        public function getDialectType(){}
    }
}