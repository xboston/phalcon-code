<?php
namespace Phalcon\Mvc\Model;
interface Validator
{
    public function __construct($options);
    public function appendMessage();
    public function getMessages();
    public function getOptions();
    public function getOption();
    public function isSetOption();
}