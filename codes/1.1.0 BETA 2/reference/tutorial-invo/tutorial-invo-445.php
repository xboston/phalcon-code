<?php

//Create the ACL
$acl = new Phalcon\Acl\Adapter\Memory();

//The default action is DENY access
$acl->setDefaultAction(Phalcon\Acl::DENY);

//Register two roles, Users is registered users
//and guests are users without a defined identity
$roles = array(
    'users' => new Phalcon\Acl\Role('Users'),
    'guests' => new Phalcon\Acl\Role('Guests')
);
foreach ($roles as $role) {
    $acl->addRole($role);
}

