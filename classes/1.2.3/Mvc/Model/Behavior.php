<?php
namespace Phalcon\Mvc\Model{

    abstract class Behavior
    {
        public function __construct($options = NULL){}
        protected function mustTakeAction(){}
        protected function getOptions(){}
        public function notify($type, $model){}
        public function missingMethod($model, $method, $arguments = NULL){}
    }
}