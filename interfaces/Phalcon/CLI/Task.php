<?php
namespace Phalcon\CLI;
interface Task extends \Phalcon\Events\EventsAwareInterface,Phalcon\DI\InjectionAwareInterface
{
    public function __construct();
    public function setDI($dependencyInjector);
    public function getDI();
    public function setEventsManager($eventsManager);
    public function getEventsManager();
    public function __get($propertyName);
}