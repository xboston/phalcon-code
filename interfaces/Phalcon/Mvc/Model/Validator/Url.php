<?php
namespace Phalcon\Mvc\Model\Validator;
abstract class Url implements \Phalcon\Mvc\Model\ValidatorInterface
{
    public function validate($record){}
    public function __construct($options){}
    public function appendMessage(){}
    public function getMessages(){}
    public function getOptions(){}
    public function getOption(){}
    public function isSetOption(){}
}