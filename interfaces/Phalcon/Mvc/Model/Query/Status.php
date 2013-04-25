<?php
namespace Phalcon\Mvc\Model\Query;
interface Status extends \Phalcon\Mvc\Model\Query\StatusInterface
{
    public function __construct($success, $model);
    public function getModel();
    public function getMessages();
    public function success();
}