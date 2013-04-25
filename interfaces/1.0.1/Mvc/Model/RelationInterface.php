<?php
namespace Phalcon\Mvc\Model{
    interface RelationInterface
    {
        public function __construct($type, $referencedModel, $fields, $referencedFields, $options = NULL);
        public function getType();
        public function getReferencedModel();
        public function getFields();
        public function getReferencedFields();
        public function getOptions();
        public function isForeingKey();
        public function getForeignKey();
        public function hasThrough();
        public function getThrough();
    }
}