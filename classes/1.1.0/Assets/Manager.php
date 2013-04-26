<?php
namespace Phalcon\Assets{

    abstract class Manager
    {
        public function useImplicitOutput($implicitOutput){}
        public function addCss($path, $local = NULL){}
        public function addJs($path, $local = NULL){}
        public function addResourceByType($type, $resource){}
        public function addResource($resource){}
        public function set($id, $collection){}
        public function get($id){}
        public function getCss(){}
        public function getJs(){}
        public function collection($name){}
        public function outputCss($collectionName = NULL){}
        public function outputJs($collectionName = NULL){}
    }
}