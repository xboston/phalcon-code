<?php
namespace Phalcon\Mvc\Model\Behavior{
    abstract class Timestampable implements \Phalcon\Mvc\Model\BehaviorInterface
    {
        public function notify($type, $model){}
        public function __construct($options = NULL){}
        protected function mustTakeAction(){}
        protected function getOptions(){}
        public function missingMethod($model, $method, $arguments = NULL){}
    }
}