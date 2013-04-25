<?php
namespace Phalcon\Validation;
interface Message
{
    public function __construct($message, $field = NULL, $type = NULL);
    public function setType($type);
    public function getType();
    public function setMessage($message);
    public function getMessage();
    public function setField($field);
    public function getField();
    public function __toString();
    public static function __set_state($message);
}