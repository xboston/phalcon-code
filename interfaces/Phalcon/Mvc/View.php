<?php
namespace Phalcon\Mvc{
    abstract class View implements \Phalcon\Events\EventsAwareInterface,\Phalcon\DI\InjectionAwareInterface,\Phalcon\Mvc\ViewInterface
    {
        const LEVEL_MAIN_LAYOUT = 5;
        const LEVEL_AFTER_TEMPLATE = 4;
        const LEVEL_LAYOUT = 3;
        const LEVEL_BEFORE_TEMPLATE = 2;
        const LEVEL_ACTION_VIEW = 1;
        const LEVEL_NO_RENDER = 0;
        public function __construct($options = NULL){}
        public function setViewsDir($viewsDir){}
        public function getViewsDir(){}
        public function setLayoutsDir($layoutsDir){}
        public function getLayoutsDir(){}
        public function setPartialsDir($partialsDir){}
        public function getPartialsDir(){}
        public function setBasePath($basePath){}
        public function setRenderLevel($level){}
        public function disableLevel($level){}
        public function setMainView($viewPath){}
        public function getMainView(){}
        public function setLayout($layout){}
        public function getLayout(){}
        public function setTemplateBefore($templateBefore){}
        public function cleanTemplateBefore(){}
        public function setTemplateAfter($templateAfter){}
        public function cleanTemplateAfter(){}
        public function setParamToView($key, $value){}
        public function setVars($params, $merge = NULL){}
        public function setVar($key, $value){}
        public function getVar($key){}
        public function getParamsToView(){}
        public function getControllerName(){}
        public function getActionName(){}
        public function getParams(){}
        public function start(){}
        public function _loadTemplateEngines(){}
        public function _engineRender(){}
        public function registerEngines($engines){}
        public function render($controllerName, $actionName, $params = NULL){}
        public function pick($renderView){}
        public function partial($partialPath){}
        public function getRender($controllerName, $actionName, $params = NULL){}
        public function finish(){}
        public function _createCache(){}
        public function isCaching(){}
        public function getCache(){}
        public function cache($options = NULL){}
        public function setContent($content){}
        public function getContent(){}
        public function getActiveRenderPath(){}
        public function disable(){}
        public function enable(){}
        public function reset(){}
        public function __set($key, $value){}
        public function __get($key){}
        public function setDI($dependencyInjector){}
        public function getDI(){}
        public function setEventsManager($eventsManager){}
        public function getEventsManager(){}
    }
}