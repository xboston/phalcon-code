<?php
namespace Phalcon\Mvc\Model\Transaction{
    interface ManagerInterface
    {
        public function __construct($dependencyInjector = NULL);
        public function has();
        public function get($autoBegin = NULL);
        public function rollbackPendent();
        public function commit();
        public function rollback($collect = NULL);
        public function notifyRollback($transaction);
        public function notifyCommit($transaction);
        public function collectTransactions();
    }
}