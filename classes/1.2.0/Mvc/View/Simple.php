<?php
namespace Phalcon\Mvc\View{

    abstract class Simple extends \Phalcon\DI\Injectable implements \Phalcon\Events\EventsAwareInterface,\Phalcon\DI\InjectionAwareInterface
    {
        public function __construct($options = NULL){}
        public function setViewsDir($viewsDir){}
        public function getViewsDir(){}
        public function registerEngines($engines){}
        protected function _loadTemplateEngines(){}
        protected function _internalRender(){}
        public function render($path, $params = NULL){}
        public function partial($partialPath, $params = NULL){}
        public function setCacheOptions($options){}
        public function getCacheOptions(){}
        protected function _createCache(){}
        public function getCache(){}
        public function cache($options = NULL){}
        public function setParamToView($key, $value){}
        public function setVars($params, $merge = NULL){}
        public function setVar($key, $value){}
        public function getVar($key){}
        public function getParamsToView(){}
        public function setContent($content){}
        public function getContent(){}
        public function getActiveRenderPath(){}
        public function __set($key, $value){}
        public function __get($key){}
        public function setDI($dependencyInjector){}
        public function getDI(){}
        public function setEventsManager($eventsManager){}
        public function getEventsManager(){}
    }
}