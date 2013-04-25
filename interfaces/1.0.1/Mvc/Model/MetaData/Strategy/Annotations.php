<?php
namespace Phalcon\Mvc\Model\MetaData\Strategy{
    abstract class Annotations
    {
        public function getMetaData($model, $dependencyInjector){}
        public function getColumnMaps(){}
    }
}