<?php
namespace Phalcon\Mvc\Model;
interface Transaction extends \Phalcon\Mvc\Model\TransactionInterface
{
    public function __construct($dependencyInjector, $autoBegin = NULL, $service = NULL);
    public function setTransactionManager($manager);
    public function begin();
    public function commit();
    public function rollback($rollbackMessage = NULL, $rollbackRecord = NULL);
    public function getConnection();
    public function setIsNewTransaction($isNew);
    public function setRollbackOnAbort($rollbackOnAbort);
    public function isManaged();
    public function getMessages();
    public function isValid();
    public function setRollbackedRecord($record);
}