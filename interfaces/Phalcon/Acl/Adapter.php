<?php
namespace Phalcon\Acl;
interface Adapter extends \Phalcon\Events\EventsAwareInterface
{
    public function setEventsManager($eventsManager);
    public function getEventsManager();
    public function setDefaultAction($defaultAccess);
    public function getDefaultAction();
    public function getActiveRole();
    public function getActiveResource();
    public function getActiveAccess();
}