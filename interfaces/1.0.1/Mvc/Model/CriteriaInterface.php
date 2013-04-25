<?php
namespace Phalcon\Mvc\Model{
    interface CriteriaInterface
    {
        public function setModelName($modelName);
        public function getModelName();
        public function bind($bindParams);
        public function where($conditions);
        public function conditions($conditions);
        public function order($orderColumns);
        public function limit($limit, $offset = NULL);
        public function forUpdate($forUpdate = NULL);
        public function sharedLock($sharedLock = NULL);
        public function andWhere($conditions);
        public function orWhere($conditions);
        public function getWhere();
        public function getConditions();
        public function getLimit();
        public function getOrder();
        public function getParams();
        public static function fromInput($dependencyInjector, $modelName, $data);
        public function execute();
    }
}