<?php
namespace Phalcon\Mvc;
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
    public function setEventsManager(){}
    public function getEventsManager(){}
    public function getModelsMetaData(){}
    public function getModelsManager(){}
    public function setTransaction($transaction){}
    public function setSource(){}
    public function getSource(){}
    public function setSchema(){}
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
    public function _exists(){}
    public static function _groupResult(){}
    public static function count($parameters = NULL){}
    public static function sum($parameters = NULL){}
    public static function maximum($parameters = NULL){}
    public static function minimum($parameters = NULL){}
    public static function average($parameters = NULL){}
    public function fireEvent($eventName){}
    public function fireEventCancel($eventName){}
    public function _cancelOperation(){}
    public function appendMessage($message){}
    public function validate(){}
    public function validationHasFailed(){}
    public function getMessages(){}
    public function _checkForeignKeys(){}
    public function _checkForeignKeysReverse(){}
    public function _preSave(){}
    public function _postSave(){}
    public function _doLowInsert(){}
    public function _doLowUpdate(){}
    public function _preSaveRelatedRecords(){}
    public function _postSaveRelatedRecords(){}
    public function save($data = NULL, $whiteList = NULL){}
    public function create($data = NULL, $whiteList = NULL){}
    public function update($data = NULL, $whiteList = NULL){}
    public function delete(){}
    public function getOperationMade(){}
    public function refresh(){}
    public function skipOperation($skip){}
    public function readAttribute($attribute){}
    public function writeAttribute($attribute, $value){}
    public function skipAttributes(){}
    public function skipAttributesOnCreate(){}
    public function skipAttributesOnUpdate(){}
    public function hasOne(){}
    public function belongsTo(){}
    public function hasMany(){}
    public function hasManyThrough(){}
    public function addBehavior(){}
    public function keepSnapshots(){}
    public function setSnapshotData($data, $columnMap = NULL){}
    public function hasSnapshotData(){}
    public function getSnapshotData(){}
    public function hasChanged($fieldName = NULL){}
    public function getChangedFields(){}
    public function useDynamicUpdate(){}
    public function getRelated($alias, $arguments = NULL){}
    public function _getRelatedRecords(){}
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