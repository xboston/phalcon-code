<?php
namespace Phalcon\Mvc\Model\Transaction;
interface Failed
{
    public function __construct($message, $record);
    public function getRecordMessages();
    public function getRecord();
    public function __clone();
    public function getMessage();
    public function getCode();
    public function getFile();
    public function getLine();
    public function getTrace();
    public function getPrevious();
    public function getTraceAsString();
    public function __toString();
}