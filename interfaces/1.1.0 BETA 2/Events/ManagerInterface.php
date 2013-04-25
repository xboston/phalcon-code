<?php
namespace Phalcon\Events{
    interface ManagerInterface
    {
        public function attach($eventType, $handler);
        public function dettachAll($type = NULL);
        public function fire($eventType, $source, $data = NULL);
        public function getListeners($type);
    }
}