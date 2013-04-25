<?php
namespace Phalcon\Mvc\Model\MetaData\Strategy;
interface Annotations
{
    public function getMetaData($model, $dependencyInjector);
    public function getColumnMaps();
}