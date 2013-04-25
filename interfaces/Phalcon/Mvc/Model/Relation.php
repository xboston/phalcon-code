<?php
namespace Phalcon\Mvc\Model;
abstract class Relation implements \Phalcon\Mvc\Model\RelationInterface
{
    const BELONGS_TO = 0;
    const HAS_ONE = 1;
    const HAS_MANY = 2;
    const HAS_ONE_THROUGH = 3;
    const HAS_MANY_THROUGH = 4;
    const MANY_TO_MANY = 3;
    public function __construct($type, $referencedModel, $fields, $referencedFields, $options = NULL){}
    public function getType(){}
    public function getReferencedModel(){}
    public function getFields(){}
    public function getReferencedFields(){}
    public function getOptions(){}
    public function isForeingKey(){}
    public function getForeignKey(){}
    public function hasThrough(){}
    public function getThrough(){}
    public function isReusable(){}
}