<?php
namespace Phalcon\Mvc{
    class Router implements \Phalcon\Mvc\RouterInterface,\Phalcon\DI\InjectionAwareInterface
    {
        const URI_SOURCE_GET_URL = 0;
        const URI_SOURCE_SERVER_REQUEST_URI = 1;
        public function __construct($defaultRoutes = NULL){}
        public function setDI($dependencyInjector){}
        public function getDI(){}
        protected function _getRewriteUri(){}
        public function setUriSource($uriSource){}
        public function removeExtraSlashes($remove){}
        public function setDefaultNamespace($namespaceName){}
        public function setDefaultModule($moduleName){}
        public function setDefaultController($controllerName){}
        public function setDefaultAction($actionName){}
        public function setDefaults($defaults){}
        public function handle($uri = NULL){}
        public function add($pattern, $paths = NULL, $httpMethods = NULL){}
        public function addGet($pattern, $paths = NULL){}
        public function addPost($pattern, $paths = NULL){}
        public function addPut($pattern, $paths = NULL){}
        public function addPatch($pattern, $paths = NULL){}
        public function addDelete($pattern, $paths = NULL){}
        public function addOptions($pattern, $paths = NULL){}
        public function addHead($pattern, $paths = NULL){}
        public function mount($group){}
        public function notFound($paths){}
        public function clear(){}
        public function getNamespaceName(){}
        public function getModuleName(){}
        public function getControllerName(){}
        public function getActionName(){}
        public function getParams(){}
        public function getMatchedRoute(){}
        public function getMatches(){}
        public function wasMatched(){}
        public function getRoutes(){}
        public function getRouteById($id){}
        public function getRouteByName($name){}
    }
}