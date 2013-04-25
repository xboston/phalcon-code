<?php
namespace Phalcon\Db;
interface RawValue
{
    public function __construct($value);
    public function getValue();
    public function __toString();
}