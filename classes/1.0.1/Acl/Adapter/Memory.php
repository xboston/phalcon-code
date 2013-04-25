<?php
namespace Phalcon\Acl\Adapter{
    class Memory extends \Phalcon\Acl\Adapter implements \Phalcon\Events\EventsAwareInterface,\Phalcon\Acl\AdapterInterface
    {
        public function __construct(){}
        public function addRole($role, $accessInherits = NULL){}
        public function addInherit($roleName, $roleToInherit){}
        public function isRole($roleName){}
        public function isResource($resourceName){}
        public function addResource($resource, $accessList = NULL){}
        public function addResourceAccess($resourceName, $accessList){}
        public function dropResourceAccess($resourceName, $accessList){}
        protected function _allowOrDeny(){}
        public function allow($roleName, $resourceName, $access){}
        public function deny($roleName, $resourceName, $access){}
        public function isAllowed($role, $resource, $access){}
        public function getRoles(){}
        public function getResources(){}
        protected function _rebuildAccessList(){}
        public function setEventsManager($eventsManager){}
        public function getEventsManager(){}
        public function setDefaultAction($defaultAccess){}
        public function getDefaultAction(){}
        public function getActiveRole(){}
        public function getActiveResource(){}
        public function getActiveAccess(){}
    }
}