<?php
namespace Phalcon\Mvc\Model\Query{
    class Status implements \Phalcon\Mvc\Model\Query\StatusInterface
    {
        public function __construct($success, $model){}
        public function getModel(){}
        public function getMessages(){}
        public function success(){}
    }
}