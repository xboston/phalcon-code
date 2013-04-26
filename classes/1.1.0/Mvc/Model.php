<?php
namespace Phalcon\Mvc{

    abstract class Model implements \Phalcon\Mvc\ModelInterface,\Phalcon\Mvc\Model\ResultInterface,\Phalcon\DI\InjectionAwareInterface,\Serializable
    {
        const OP_NONE = 0;
        const OP_CREATE = 1;
        const OP_UPDATE = 2;
        const OP_DELETE = 3;
        const DIRTY_STATE_PERSISTENT = 0;
        const DIRTY_STATE_TRANSIENT = 1;
        const DIRTY_STATE_DETACHED = 2;
        public function __construct($dependencyInjector = NULL, $modelsManager = NULL){}
        public function setDI($dependencyInjector){}
        public function getDI(){}
        protected function setEventsManager(){}
        protected function getEventsManager(){}
        public function getModelsMetaData(){}
        public function getModelsManager(){}
        public function setTransaction($transaction){}
        protected function setSource(){}
        public function getSource(){}
        protected function setSchema(){}
        public function getSchema(){}
        public function setConnectionService($connectionService){}
        public function setReadConnectionService($connectionService){}
        public function setWriteConnectionService($connectionService){}
        public function getReadConnectionService(){}
        public function getWriteConnectionService(){}
        public function setDirtyState($dirtyState){}
        public function getDirtyState(){}
        public function getReadConnection(){}
        public function getWriteConnection(){}
        public function assign($data, $columnMap = NULL){}
        public static function cloneResultMap($base, $data, $columnMap, $dirtyState = NULL, $keepSnapshots = NULL){}
        public static function cloneResultMapHydrate($data, $columnMap, $hydrationMode){}
        public static function cloneResult($base, $data, $dirtyState = NULL){}
        public static function find($parameters = NULL){}
        public static function findFirst($parameters = NULL){}
        public static function query($dependencyInjector = NULL){}
        protected function _exists(){}
        protected static function _groupResult(){}
        public static function count($parameters = NULL){}
        public static function sum($parameters = NULL){}
        public static function maximum($parameters = NULL){}
        public static function minimum($parameters = NULL){}
        public static function average($parameters = NULL){}
        public function fireEvent($eventName){}
        public function fireEventCancel($eventName){}
        protected function _cancelOperation(){}
        public function appendMessage($message){}
        protected function validate(){}
        public function validationHasFailed(){}
        public function getMessages(){}
        protected function _checkForeignKeys(){}
        protected function _checkForeignKeysReverse(){}
        protected function _preSave(){}
        protected function _postSave(){}
        protected function _doLowInsert(){}
        protected function _doLowUpdate(){}
        protected function _preSaveRelatedRecords(){}
        protected function _postSaveRelatedRecords(){}
        public function save($data = NULL, $whiteList = NULL){}
        public function create($data = NULL, $whiteList = NULL){}
        public function update($data = NULL, $whiteList = NULL){}
        public function delete(){}
        public function getOperationMade(){}
        public function refresh(){}
        public function skipOperation($skip){}
        public function readAttribute($attribute){}
        public function writeAttribute($attribute, $value){}
        protected function skipAttributes(){}
        protected function skipAttributesOnCreate(){}
        protected function skipAttributesOnUpdate(){}
        protected function hasOne(){}
        protected function belongsTo(){}
        protected function hasMany(){}
        protected function hasManyThrough(){}
        protected function addBehavior(){}
        protected function keepSnapshots(){}
        public function setSnapshotData($data, $columnMap = NULL){}
        public function hasSnapshotData(){}
        public function getSnapshotData(){}
        public function hasChanged($fieldName = NULL){}
        public function getChangedFields(){}
        protected function useDynamicUpdate(){}
        public function getRelated($alias, $arguments = NULL){}
        protected function _getRelatedRecords(){}
        public function __call($method, $arguments = NULL){}
        public static function __callStatic($method, $arguments = NULL){}
        public function __set($property, $value){}
        public function __get($property){}
        public function __isset($property){}
        public function serialize(){}
        public function unserialize($data){}
        public function dump(){}
        public function toArray(){}
        public static function setup($options){}
    }
}