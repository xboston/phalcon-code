<?php
namespace Phalcon\Mvc{

    abstract class Collection implements \Phalcon\Mvc\CollectionInterface,\Phalcon\DI\InjectionAwareInterface,\Serializable
    {
        const OP_NONE = 0;
        const OP_CREATE = 1;
        const OP_UPDATE = 2;
        const OP_DELETE = 3;
        public function __construct($dependencyInjector = NULL, $modelsManager = NULL){}
        public function setId($id){}
        public function getId(){}
        public function setDI($dependencyInjector){}
        public function getDI(){}
        protected function setEventsManager(){}
        protected function getEventsManager(){}
        public function getModelsManager(){}
        public function getReservedAttributes(){}
        protected function useImplicitObjectIds(){}
        protected function setSource(){}
        public function getSource(){}
        public function setConnectionService($connectionService){}
        public function getConnectionService(){}
        public function getConnection(){}
        public function readAttribute($attribute){}
        public function writeAttribute($attribute, $value){}
        public static function cloneResult($collection, $document){}
        protected static function _getResultset(){}
        protected static function _getGroupResultset(){}
        protected function _preSave(){}
        protected function _postSave(){}
        protected function validate(){}
        public function validationHasFailed(){}
        public function fireEvent($eventName){}
        public function fireEventCancel($eventName){}
        protected function _cancelOperation(){}
        protected function _exists(){}
        public function getMessages(){}
        public function appendMessage($message){}
        public function save(){}
        public static function findById($id){}
        public static function findFirst($parameters = NULL){}
        public static function find($parameters = NULL){}
        public static function count($parameters = NULL){}
        public static function aggregate($parameters){}
        public static function summatory($field, $conditions = NULL, $finalize = NULL){}
        public function delete(){}
        public function toArray(){}
        public function serialize(){}
        public function unserialize($data){}
    }
}