<?php
namespace Phalcon\Acl;
interface Resource extends \Phalcon\Acl\ResourceInterface
{
    public function __construct($name, $description = NULL);
    public function getName();
    public function getDescription();
    public function __toString();
}