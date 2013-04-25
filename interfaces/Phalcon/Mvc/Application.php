<?php
namespace Phalcon\Mvc;
interface Application extends \Phalcon\Events\EventsAwareInterface,\Phalcon\DI\InjectionAwareInterface
{
    public function registerModules($modules, $merge = NULL);
    public function getModules();
    public function setDefaultModule($defaultModule);
    public function getDefaultModule();
    public function handle($uri = NULL);
    public function setDI($dependencyInjector);
    public function getDI();
    public function setEventsManager($eventsManager);
    public function getEventsManager();
    public function __get($propertyName);
}