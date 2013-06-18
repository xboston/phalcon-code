<?php
namespace Phalcon\Mvc{

    interface DispatcherInterface extends \Phalcon\DispatcherInterface
    {
        public function setControllerSuffix($controllerSuffix);
        public function setDefaultController($controllerName);
        public function setControllerName($controllerName);
        public function getControllerName();
        public function getLastController();
        public function getActiveController();
        public function setActionSuffix($actionSuffix);
        public function setDefaultNamespace($namespace);
        public function setDefaultAction($actionName);
        public function setActionName($actionName);
        public function getActionName();
        public function setParams($params);
        public function getParams();
        public function setParam($param, $value);
        public function getParam($param, $filters = NULL);
        public function isFinished();
        public function getReturnedValue();
        public function dispatch();
        public function forward($forward);
    }
}