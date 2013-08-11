<?php
namespace Phalcon\Mvc\Model{

    interface CriteriaInterface
    {
        public function setModelName($modelName);
        public function getModelName();
        public function bind($bindParams);
        public function bindTypes($bindTypes);
        public function where($conditions);
        public function conditions($conditions);
        public function orderBy($orderColumns);
        public function limit($limit, $offset = NULL);
        public function forUpdate($forUpdate = NULL);
        public function sharedLock($sharedLock = NULL);
        public function andWhere($conditions, $bindParams = NULL, $bindTypes = NULL);
        public function orWhere($conditions, $bindParams = NULL, $bindTypes = NULL);
        public function betweenWhere($expr, $minimum, $maximum);
        public function notBetweenWhere($expr, $minimum, $maximum);
        public function inWhere($expr, $values);
        public function notInWhere($expr, $values);
        public function getWhere();
        public function getConditions();
        public function getLimit();
        public function getOrder();
        public function getParams();
        public static function fromInput($dependencyInjector, $modelName, $data);
        public function execute();
    }
}