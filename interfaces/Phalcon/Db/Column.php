<?php
namespace Phalcon\Db;
interface Column extends \Phalcon\Db\ColumnInterface
{
    const TYPE_INTEGER = 0;
    const TYPE_DATE = 1;
    const TYPE_VARCHAR = 2;
    const TYPE_DECIMAL = 3;
    const TYPE_DATETIME = 4;
    const TYPE_CHAR = 5;
    const TYPE_TEXT = 6;
    const TYPE_FLOAT = 7;
    const TYPE_BOOLEAN = 8;
    const BIND_PARAM_NULL = 0;
    const BIND_PARAM_INT = 1;
    const BIND_PARAM_STR = 2;
    const BIND_PARAM_BOOL = 5;
    const BIND_PARAM_DECIMAL = 32;
    const BIND_SKIP = 1024;
    public function __construct($columnName, $definition);
    public function getSchemaName();
    public function getName();
    public function getType();
    public function getSize();
    public function getScale();
    public function isUnsigned();
    public function isNotNull();
    public function isPrimary();
    public function isAutoIncrement();
    public function isNumeric();
    public function isFirst();
    public function getAfterPosition();
    public function getBindType();
    public static function __set_state($data);
}