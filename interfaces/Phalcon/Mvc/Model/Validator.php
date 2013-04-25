<?php
namespace Phalcon\Mvc\Model;
abstract class Validator
{
    public function __construct($options){}
    public function appendMessage(){}
    public function getMessages(){}
    public function getOptions(){}
    public function getOption(){}
    public function isSetOption(){}
}