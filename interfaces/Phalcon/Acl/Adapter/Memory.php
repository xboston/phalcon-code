<?php
namespace Phalcon\Acl\Adapter;
interface Memory extends \Phalcon\Events\EventsAwareInterface,Phalcon\Acl\AdapterInterface
{
    public function __construct();
    public function addRole($role, $accessInherits = NULL);
    public function addInherit($roleName, $roleToInherit);
    public function isRole($roleName);
    public function isResource($resourceName);
    public function addResource($resource, $accessList = NULL);
    public function addResourceAccess($resourceName, $accessList);
    public function dropResourceAccess($resourceName, $accessList);
    public function _allowOrDeny();
    public function allow($roleName, $resourceName, $access);
    public function deny($roleName, $resourceName, $access);
    public function isAllowed($role, $resource, $access);
    public function getRoles();
    public function getResources();
    public function _rebuildAccessList();
    public function setEventsManager($eventsManager);
    public function getEventsManager();
    public function setDefaultAction($defaultAccess);
    public function getDefaultAction();
    public function getActiveRole();
    public function getActiveResource();
    public function getActiveAccess();
}