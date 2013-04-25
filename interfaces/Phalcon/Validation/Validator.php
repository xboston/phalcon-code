<?php
namespace Phalcon\Validation;
interface Validator
{
    public function __construct($options = NULL);
    public function isSetOption($key);
    public function getOption($key);
}