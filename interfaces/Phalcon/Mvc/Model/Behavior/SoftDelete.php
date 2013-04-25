<?php
namespace Phalcon\Mvc\Model\Behavior;
abstract class SoftDelete implements \Phalcon\Mvc\Model\BehaviorInterface
{
    public function notify($type, $model){}
    public function __construct($options = NULL){}
    public function mustTakeAction(){}
    public function getOptions(){}
    public function missingMethod($model, $method, $arguments = NULL){}
}