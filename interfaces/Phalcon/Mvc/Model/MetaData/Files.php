<?php
namespace Phalcon\Mvc\Model\MetaData;
interface Files extends \Phalcon\DI\InjectionAwareInterface,Phalcon\Mvc\Model\MetaDataInterface
{
    public function __construct($options = NULL);
    public function read($key);
    public function write($key, $data);
    public function _initialize();
    public function setDI($dependencyInjector);
    public function getDI();
    public function setStrategy($strategy);
    public function getStrategy();
    public function readMetaData($model);
    public function readMetaDataIndex($model, $index);
    public function writeMetaDataIndex($model, $index, $data);
    public function readColumnMap($model);
    public function readColumnMapIndex($model, $index);
    public function getAttributes($model);
    public function getPrimaryKeyAttributes($model);
    public function getNonPrimaryKeyAttributes($model);
    public function getNotNullAttributes($model);
    public function getDataTypes($model);
    public function getDataTypesNumeric($model);
    public function getIdentityField($model);
    public function getBindTypes($model);
    public function getAutomaticCreateAttributes($model);
    public function getAutomaticUpdateAttributes($model);
    public function setAutomaticCreateAttributes($model, $attributes);
    public function setAutomaticUpdateAttributes($model, $attributes);
    public function getColumnMap($model);
    public function getReverseColumnMap($model);
    public function hasAttribute($model, $attribute);
    public function isEmpty();
    public function reset();
}