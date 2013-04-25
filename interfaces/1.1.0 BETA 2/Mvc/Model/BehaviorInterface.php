<?php
namespace Phalcon\Mvc\Model{

    interface BehaviorInterface
    {
        public function __construct($options = NULL);
        public function notify($type, $model);
        public function missingMethod($model, $method, $arguments = NULL);
    }
}