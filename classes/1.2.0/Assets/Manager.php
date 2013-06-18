<?php
namespace Phalcon\Assets{

    abstract class Manager
    {
        public function __construct($options = NULL){}
        public function setOptions($options){}
        public function getOptions(){}
        public function useImplicitOutput($implicitOutput){}
        public function addCss($path, $local = NULL, $filter = NULL, $attributes = NULL){}
        public function addJs($path, $local = NULL, $filter = NULL, $attributes = NULL){}
        public function addResourceByType($type, $resource){}
        public function addResource($resource){}
        public function set($id, $collection){}
        public function get($id){}
        public function getCss(){}
        public function getJs(){}
        public function collection($name){}
        public function output($collection, $callback){}
        public function outputCss($collectionName = NULL){}
        public function outputJs($collectionName = NULL){}
    }
}