<?php
namespace Phalcon\Mvc\Model{

    abstract class Criteria implements \Phalcon\Mvc\Model\CriteriaInterface,\Phalcon\DI\InjectionAwareInterface
    {
        public function setDI($dependencyInjector){}
        public function getDI(){}
        public function setModelName($modelName){}
        public function getModelName(){}
        public function bind($bindParams){}
        public function bindTypes($bindTypes){}
        public function columns($columns){}
        public function join($model, $conditions = NULL, $alias = NULL, $type = NULL){}
        public function innerJoin($model, $conditions = NULL, $alias = NULL){}
        public function leftJoin($model, $conditions = NULL, $alias = NULL){}
        public function rightJoin($model, $conditions = NULL, $alias = NULL){}
        public function where($conditions, $bindParams = NULL, $bindTypes = NULL){}
        public function addWhere($conditions, $bindParams = NULL, $bindTypes = NULL){}
        public function andWhere($conditions, $bindParams = NULL, $bindTypes = NULL){}
        public function orWhere($conditions, $bindParams = NULL, $bindTypes = NULL){}
        public function betweenWhere($expr, $minimum, $maximum){}
        public function notBetweenWhere($expr, $minimum, $maximum){}
        public function inWhere($expr, $values){}
        public function notInWhere($expr, $values){}
        public function conditions($conditions){}
        public function order($orderColumns){}
        public function orderBy($orderColumns){}
        public function limit($limit, $offset = NULL){}
        public function forUpdate($forUpdate = NULL){}
        public function sharedLock($sharedLock = NULL){}
        public function getWhere(){}
        public function getColumns(){}
        public function getConditions(){}
        public function getLimit(){}
        public function getOrder(){}
        public function getParams(){}
        public static function fromInput($dependencyInjector, $modelName, $data){}
        public function execute(){}
    }
}