<?php
namespace Phalcon\Acl;
abstract class Role implements \Phalcon\Acl\RoleInterface
{
    public function __construct($name, $description = NULL){}
    public function getName(){}
    public function getDescription(){}
    public function __toString(){}
}