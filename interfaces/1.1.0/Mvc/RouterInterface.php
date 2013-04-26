<?php
namespace Phalcon\Mvc{

    interface RouterInterface
    {
        public function setDefaultModule($moduleName);
        public function setDefaultController($controllerName);
        public function setDefaultAction($actionName);
        public function setDefaults($defaults);
        public function handle($uri = NULL);
        public function add($pattern, $paths = NULL, $httpMethods = NULL);
        public function addGet($pattern, $paths = NULL);
        public function addPost($pattern, $paths = NULL);
        public function addPut($pattern, $paths = NULL);
        public function addDelete($pattern, $paths = NULL);
        public function addOptions($pattern, $paths = NULL);
        public function addHead($pattern, $paths = NULL);
        public function clear();
        public function getModuleName();
        public function getControllerName();
        public function getActionName();
        public function getParams();
        public function getMatchedRoute();
        public function getMatches();
        public function wasMatched();
        public function getRoutes();
        public function getRouteById($id);
        public function getRouteByName($name);
    }
}