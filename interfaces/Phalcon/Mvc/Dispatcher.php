<?php
namespace Phalcon\Mvc{
    abstract class Dispatcher implements \Phalcon\Events\EventsAwareInterface,\Phalcon\DI\InjectionAwareInterface,\Phalcon\DispatcherInterface,\Phalcon\Mvc\DispatcherInterface
    {
        const EXCEPTION_NO_DI = 0;
        const EXCEPTION_CYCLIC_ROUTING = 1;
        const EXCEPTION_HANDLER_NOT_FOUND = 2;
        const EXCEPTION_INVALID_HANDLER = 3;
        const EXCEPTION_INVALID_PARAMS = 4;
        const EXCEPTION_ACTION_NOT_FOUND = 5;
        public function setControllerSuffix($controllerSuffix){}
        public function setDefaultController($controllerName){}
        public function setControllerName($controllerName){}
        public function getControllerName(){}
        protected function _throwDispatchException(){}
        public function getLastController(){}
        public function getActiveController(){}
        public function __construct(){}
        public function setDI($dependencyInjector){}
        public function getDI(){}
        public function setEventsManager($eventsManager){}
        public function getEventsManager(){}
        public function setActionSuffix($actionSuffix){}
        public function setNamespaceName($namespaceName){}
        public function getNamespaceName(){}
        public function setDefaultNamespace($namespace){}
        public function getDefaultNamespace(){}
        public function setDefaultAction($actionName){}
        public function setActionName($actionName){}
        public function getActionName(){}
        public function setParams($params){}
        public function getParams(){}
        public function setParam($param, $value){}
        public function getParam($param, $filters = NULL, $defaultValue = NULL){}
        public function getActiveMethod(){}
        public function isFinished(){}
        public function setReturnedValue($value){}
        public function getReturnedValue(){}
        public function dispatch(){}
        public function forward($forward){}
    }
}