<?php
namespace Phalcon;
abstract class Validation
{
    public function __construct($validators = NULL){}
    public function validate($data, $entity = NULL){}
    public function add($attribute, $validator){}
    public function getValidators(){}
    public function getEntity(){}
    public function getMessages(){}
    public function appendMessage($message){}
    public function bind($entity, $data){}
    public function getValue($attribute){}
}