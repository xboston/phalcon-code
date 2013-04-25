<?php
namespace Phalcon\Mvc\Model;
interface Query extends \Phalcon\Mvc\Model\QueryInterface,Phalcon\DI\InjectionAwareInterface
{
    public function __construct($phql = NULL);
    public function setDI($dependencyInjector);
    public function getDI();
    public function setUniqueRow($uniqueRow);
    public function getUniqueRow();
    public function _getQualified();
    public function _getCallArgument();
    public function _getFunctionCall();
    public function _getExpression();
    public function _getSelectColumn();
    public function _getTable();
    public function _getJoin();
    public function _getJoinType();
    public function _getJoins();
    public function _getOrderClause();
    public function _getGroupClause();
    public function _prepareSelect();
    public function _prepareInsert();
    public function _prepareUpdate();
    public function _prepareDelete();
    public function parse();
    public function cache($cacheOptions);
    public function getCacheOptions();
    public function getCache();
    public function _executeSelect();
    public function _executeInsert();
    public function _getRelatedRecords();
    public function _executeUpdate();
    public function _executeDelete();
    public function execute($bindParams = NULL, $bindTypes = NULL);
    public function getSingleResult($bindParams = NULL, $bindTypes = NULL);
    public function setType($type);
    public function getType();
    public function setIntermediate($intermediate);
    public function getIntermediate();
}