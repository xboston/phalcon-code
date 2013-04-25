<?php
namespace Phalcon\Mvc\Model\Validator;
interface Inclusionin extends \Phalcon\Mvc\Model\ValidatorInterface
{
    public function validate($record);
    public function __construct($options);
    public function appendMessage();
    public function getMessages();
    public function getOptions();
    public function getOption();
    public function isSetOption();
}