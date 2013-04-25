<?php
namespace Phalcon\Mvc\Model;
interface Behavior
{
    public function __construct($options = NULL);
    public function mustTakeAction();
    public function getOptions();
    public function notify($type, $model);
    public function missingMethod($model, $method, $arguments = NULL);
}