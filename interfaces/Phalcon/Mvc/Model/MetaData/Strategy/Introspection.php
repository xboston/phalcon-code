<?php
namespace Phalcon\Mvc\Model\MetaData\Strategy;
abstract class Introspection
{
    public function getMetaData($model, $dependencyInjector){}
    public function getColumnMaps($model, $dependencyInjector){}
}