<?php
namespace Phalcon\Events;
interface Manager extends \Phalcon\Events\ManagerInterface
{
    public function attach($eventType, $handler, $priority = NULL);
    public function collectResponses($collect);
    public function isCollecting();
    public function getResponses();
    public function dettachAll($type = NULL);
    public function fireQueue($queue, $event);
    public function fire($eventType, $source, $data = NULL, $cancelable = NULL);
    public function hasListeners($type);
    public function getListeners($type);
}