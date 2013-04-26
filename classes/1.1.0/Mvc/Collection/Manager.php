<?php
namespace Phalcon\Mvc\Collection{

    abstract class Manager implements \Phalcon\DI\InjectionAwareInterface,\Phalcon\Events\EventsAwareInterface
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
        public function setConnectionService($model, $connectionService){}
        public function useImplicitObjectIds($model, $useImplicitObjectIds){}
        public function isUsingImplicitObjectIds($model){}
        public function getConnection($model){}
        public function notifyEvent($eventName, $model){}
    }
}