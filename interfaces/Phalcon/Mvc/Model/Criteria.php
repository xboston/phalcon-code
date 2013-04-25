<?php
namespace Phalcon\Mvc\Model;
interface Criteria extends \Phalcon\Mvc\Model\CriteriaInterface,Phalcon\DI\InjectionAwareInterface
{
    public function setDI($dependencyInjector);
    public function getDI();
    public function setModelName($modelName);
    public function getModelName();
    public function bind($bindParams);
    public function where($conditions);
    public function addWhere($conditions);
    public function andWhere($conditions);
    public function orWhere($conditions);
    public function conditions($conditions);
    public function order($orderColumns);
    public function limit($limit, $offset = NULL);
    public function forUpdate($forUpdate = NULL);
    public function sharedLock($sharedLock = NULL);
    public function getWhere();
    public function getConditions();
    public function getLimit();
    public function getOrder();
    public function getParams();
    public static function fromInput($dependencyInjector, $modelName, $data);
    public function execute();
}