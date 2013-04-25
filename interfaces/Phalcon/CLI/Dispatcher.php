<?php
namespace Phalcon\CLI;
interface Dispatcher extends \Phalcon\Events\EventsAwareInterface,Phalcon\DI\InjectionAwareInterface,Phalcon\DispatcherInterface
{
    public function setTaskSuffix($taskSuffix);
    public function setDefaultTask($taskName);
    public function setTaskName($taskName);
    public function getTaskName();
    public function _throwDispatchException();
    public function getLastTask();
    public function getActiveTask();
    public function __construct();
    public function setDI($dependencyInjector);
    public function getDI();
    public function setEventsManager($eventsManager);
    public function getEventsManager();
    public function setActionSuffix($actionSuffix);
    public function setNamespaceName($namespaceName);
    public function getNamespaceName();
    public function setDefaultNamespace($namespace);
    public function getDefaultNamespace();
    public function setDefaultAction($actionName);
    public function setActionName($actionName);
    public function getActionName();
    public function setParams($params);
    public function getParams();
    public function setParam($param, $value);
    public function getParam($param, $filters = NULL, $defaultValue = NULL);
    public function getActiveMethod();
    public function isFinished();
    public function setReturnedValue($value);
    public function getReturnedValue();
    public function dispatch();
    public function forward($forward);
}