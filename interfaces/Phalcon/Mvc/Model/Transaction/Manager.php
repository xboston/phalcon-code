<?php
namespace Phalcon\Mvc\Model\Transaction{
    abstract class Manager implements \Phalcon\Mvc\Model\Transaction\ManagerInterface,\Phalcon\DI\InjectionAwareInterface
    {
        public function __construct($dependencyInjector = NULL){}
        public function setDI($dependencyInjector){}
        public function getDI(){}
        public function setDbService($service){}
        public function getDbService(){}
        public function setRollbackPendent($rollbackPendent){}
        public function getRollbackPendent(){}
        public function has(){}
        public function get($autoBegin = NULL){}
        public function getOrCreateTransaction($autoBegin = NULL){}
        public function rollbackPendent(){}
        public function commit(){}
        public function rollback($collect = NULL){}
        public function notifyRollback($transaction){}
        public function notifyCommit($transaction){}
        public function _collectTransaction(){}
        public function collectTransactions(){}
    }
}