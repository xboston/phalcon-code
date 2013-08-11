<?php
namespace Phalcon\Mvc{

    interface ModelInterface
    {
        public function __construct($dependencyInjector = NULL, $modelsManager = NULL);
        public function setTransaction($transaction);
        public function getSource();
        public function getSchema();
        public function setConnectionService($connectionService);
        public function setWriteConnectionService($connectionService);
        public function setReadConnectionService($connectionService);
        public function getReadConnectionService();
        public function getWriteConnectionService();
        public function getReadConnection();
        public function getWriteConnection();
        public function assign($data, $columnMap = NULL);
        public static function cloneResultMap($base, $data, $columnMap, $dirtyState = NULL, $keepSnapshots = NULL);
        public static function cloneResult($base, $data, $dirtyState = NULL);
        public static function cloneResultMapHydrate($data, $columnMap, $hydrationMode);
        public static function find($parameters = NULL);
        public static function findFirst($parameters = NULL);
        public static function query($dependencyInjector = NULL);
        public static function count($parameters = NULL);
        public static function sum($parameters = NULL);
        public static function maximum($parameters = NULL);
        public static function minimum($parameters = NULL);
        public static function average($parameters = NULL);
        public function fireEvent($eventName);
        public function fireEventCancel($eventName);
        public function appendMessage($message);
        public function validationHasFailed();
        public function getMessages();
        public function save($data = NULL, $whiteList = NULL);
        public function create($data = NULL, $whiteList = NULL);
        public function update($data = NULL, $whiteList = NULL);
        public function delete();
        public function getOperationMade();
        public function refresh();
        public function readAttribute($attribute);
        public function writeAttribute($attribute, $value);
        public function getRelated($alias, $arguments = NULL);
    }
}