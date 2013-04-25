<?php
namespace Phalcon\Mvc\Model{
    interface ManagerInterface
    {
        public function initialize($model);
        public function isInitialized($modelName);
        public function getLastInitialized();
        public function load($modelName);
        public function addHasOne($model, $fields, $referenceModel, $referencedFields, $options = NULL);
        public function addBelongsTo($model, $fields, $referenceModel, $referencedFields, $options = NULL);
        public function addHasMany($model, $fields, $referenceModel, $referencedFields, $options = NULL);
        public function existsBelongsTo($modelName, $modelRelation);
        public function existsHasMany($modelName, $modelRelation);
        public function existsHasOne($modelName, $modelRelation);
        public function getBelongsToRecords($method, $modelName, $modelRelation, $record, $parameters = NULL);
        public function getHasManyRecords($method, $modelName, $modelRelation, $record, $parameters = NULL);
        public function getHasOneRecords($method, $modelName, $modelRelation, $record, $parameters = NULL);
        public function getBelongsTo($model);
        public function getHasMany($model);
        public function getHasOne($model);
        public function getHasOneAndHasMany($model);
        public function getRelations($modelName);
        public function getRelationsBetween($firstModel, $secondModel);
        public function createQuery($phql);
        public function executeQuery($phql, $placeholders = NULL);
        public function createBuilder($params = NULL);
        public function addBehavior($model, $behavior);
        public function notifyEvent($eventName, $model);
        public function missingMethod($model, $eventName, $data);
        public function getLastQuery();
    }
}