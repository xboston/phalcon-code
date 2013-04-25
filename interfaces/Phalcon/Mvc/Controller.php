<?php
namespace Phalcon\Mvc;
interface Controller extends \Phalcon\Events\EventsAwareInterface,\Phalcon\DI\InjectionAwareInterface
{
    public function __construct();
    public function setDI($dependencyInjector);
    public function getDI();
    public function setEventsManager($eventsManager);
    public function getEventsManager();
    public function __get($propertyName);
}