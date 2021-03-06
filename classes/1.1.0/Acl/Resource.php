<?php
namespace Phalcon\Acl{

    abstract class Resource implements \Phalcon\Acl\ResourceInterface
    {
        public function __construct($name, $description = NULL){}
        public function getName(){}
        public function getDescription(){}
        public function __toString(){}
    }
}