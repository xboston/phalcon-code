<?php
namespace Phalcon\Mvc\Model{
    abstract class Manager implements \Phalcon\Mvc\Model\ManagerInterface,\Phalcon\DI\InjectionAwareInterface,\Phalcon\Events\EventsAwareInterface
    {
        public function setDI($dependencyInjector){}
        public function getDI(){}
        public function setEventsManager($eventsManager){}
        public function getEventsManager(){}
        public function setCustomEventsManager($model, $eventsManager){}
        public function getCustomEventsManager($model){}
        public function initialize($model){}
        public function isInitialized($modelName){}
        public function getLastInitialized(){}
        public function load($modelName, $newInstance = NULL){}
        public function setModelSource($model, $source){}
        public function getModelSource($model){}
        public function setModelSchema($model, $schema){}
        public function getModelSchema($model){}
        public function setConnectionService($model, $connectionService){}
        public function setWriteConnectionService($model, $connectionService){}
        public function setReadConnectionService($model, $connectionService){}
        public function getWriteConnection($model){}
        public function getReadConnection($model){}
        public function getReadConnectionService($model){}
        public function getWriteConnectionService($model){}
        public function notifyEvent($eventName, $model){}
        public function missingMethod($model, $eventName, $data){}
        public function addBehavior($model, $behavior){}
        public function keepSnapshots($model, $keepSnapshots){}
        public function isKeepingSnapshots($model){}
        public function useDynamicUpdate($model, $dynamicUpdate){}
        public function isUsingDynamicUpdate($model){}
        public function addHasOne($model, $fields, $referencedModel, $referencedFields, $options = NULL){}
        public function addBelongsTo($model, $fields, $referencedModel, $referencedFields, $options = NULL){}
        public function addHasMany($model, $fields, $referencedModel, $referencedFields, $options = NULL){}
        public function addHasManyThrough(){}
        public function existsBelongsTo($modelName, $modelRelation){}
        public function existsHasMany($modelName, $modelRelation){}
        public function existsHasOne($modelName, $modelRelation){}
        public function getRelationByAlias($modelName, $alias){}
        public function getRelationRecords($relation, $method, $record, $parameters = NULL){}
        public function getReusableRecords($modelName, $key){}
        public function setReusableRecords($modelName, $key, $records){}
        public function clearReusableObjects(){}
        public function getBelongsToRecords($method, $modelName, $modelRelation, $record, $parameters = NULL){}
        public function getHasManyRecords($method, $modelName, $modelRelation, $record, $parameters = NULL){}
        public function getHasOneRecords($method, $modelName, $modelRelation, $record, $parameters = NULL){}
        public function getBelongsTo($model){}
        public function getHasMany($model){}
        public function getHasOne($model){}
        public function getHasOneAndHasMany($model){}
        public function getRelations($modelName){}
        public function getRelationsBetween($first, $second){}
        public function createQuery($phql){}
        public function executeQuery($phql, $placeholders = NULL){}
        public function createBuilder($params = NULL){}
        public function getLastQuery(){}
    }
}