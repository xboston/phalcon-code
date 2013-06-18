<?php
namespace Phalcon\Mvc\Model{

    abstract class Query implements \Phalcon\Mvc\Model\QueryInterface,\Phalcon\DI\InjectionAwareInterface
    {
        const TYPE_SELECT = 309;
        const TYPE_INSERT = 306;
        const TYPE_UPDATE = 300;
        const TYPE_DELETE = 303;
        public function __construct($phql = NULL){}
        public function setDI($dependencyInjector){}
        public function getDI(){}
        public function setUniqueRow($uniqueRow){}
        public function getUniqueRow(){}
        protected function _getQualified(){}
        protected function _getCallArgument(){}
        protected function _getFunctionCall(){}
        protected function _getExpression(){}
        protected function _getSelectColumn(){}
        protected function _getTable(){}
        protected function _getJoin(){}
        protected function _getJoinType(){}
        protected function _getSingleJoin(){}
        protected function _getMultiJoin(){}
        protected function _getJoins(){}
        protected function _getOrderClause(){}
        protected function _getGroupClause(){}
        protected function _prepareSelect(){}
        protected function _prepareInsert(){}
        protected function _prepareUpdate(){}
        protected function _prepareDelete(){}
        public function parse(){}
        public function cache($cacheOptions){}
        public function getCacheOptions(){}
        public function getCache(){}
        protected function _executeSelect(){}
        protected function _executeInsert(){}
        protected function _getRelatedRecords(){}
        protected function _executeUpdate(){}
        protected function _executeDelete(){}
        public function execute($bindParams = NULL, $bindTypes = NULL){}
        public function getSingleResult($bindParams = NULL, $bindTypes = NULL){}
        public function setType($type){}
        public function getType(){}
        public function setBindParams($bindParams){}
        public function getBindParams(){}
        public function setBindTypes($bindTypes){}
        public function getBindTypes(){}
        public function setIntermediate($intermediate){}
        public function getIntermediate(){}
    }
}