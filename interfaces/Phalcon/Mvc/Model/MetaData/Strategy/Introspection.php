<?php
namespace Phalcon\Mvc\Model\MetaData\Strategy;
interface Introspection
{
    public function getMetaData($model, $dependencyInjector);
    public function getColumnMaps($model, $dependencyInjector);
}