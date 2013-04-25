<?php
namespace Phalcon\Logger;
interface Item
{
    public function __construct($message, $type, $time = NULL);
    public function getMessage();
    public function getType();
    public function getTime();
}