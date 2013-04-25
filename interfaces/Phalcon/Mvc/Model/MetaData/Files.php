<?php
namespace Phalcon\Mvc\Model\MetaData;
interface Files extends \Phalcon\DI\InjectionAwareInterface,\Phalcon\Mvc\Model\MetaDataInterface
{
    const MODELS_ATTRIBUTES = 0;
    const MODELS_PRIMARY_KEY = 1;
    const MODELS_NON_PRIMARY_KEY = 2;
    const MODELS_NOT_NULL = 3;
    const MODELS_DATA_TYPES = 4;
    const MODELS_DATA_TYPES_NUMERIC = 5;
    const MODELS_DATE_AT = 6;
    const MODELS_DATE_IN = 7;
    const MODELS_IDENTITY_COLUMN = 8;
    const MODELS_DATA_TYPES_BIND = 9;
    const MODELS_AUTOMATIC_DEFAULT_INSERT = 10;
    const MODELS_AUTOMATIC_DEFAULT_UPDATE = 11;
    const MODELS_COLUMN_MAP = 0;
    const MODELS_REVERSE_COLUMN_MAP = 1;
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