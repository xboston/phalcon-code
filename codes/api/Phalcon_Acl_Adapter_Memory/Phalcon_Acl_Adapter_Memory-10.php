<?php

$acl = new Phalcon\Acl\Adapter\Memory();

$acl->setDefaultAction(Phalcon\Acl::DENY);

//Register roles
$roles = array(
    'users' => new Phalcon\Acl\Role('Users'),
    'guests' => new Phalcon\Acl\Role('Guests')
);
foreach ($roles as $role) {
    $acl->addRole($role);
}

//Private area resources
  $privateResources = array(
    'companies' => array('index', 'search', 'new', 'edit', 'save', 'create', 'delete'),
    'products' => array('index', 'search', 'new', 'edit', 'save', 'create', 'delete'),
    'invoices' => array('index', 'profile')
);
foreach ($privateResources as $resource => $actions) {
    $acl->addResource(new Phalcon\Acl\Resource($resource), $actions);
}

//Public area resources
$publicResources = array(
    'index' => array('index'),
    'about' => array('index'),
    'session' => array('index', 'register', 'start', 'end'),
    'contact' => array('index', 'send')
);
  foreach ($publicResources as $resource => $actions) {
    $acl->addResource(new Phalcon\Acl\Resource($resource), $actions);
}

  //Grant access to public areas to both users and guests
foreach ($roles as $role){
    foreach ($publicResources as $resource => $actions) {
        $acl->allow($role->getName(), $resource, '*');
    }
}

//Grant acess to private area to role Users
  foreach ($privateResources as $resource => $actions) {
         foreach ($actions as $action) {
        $acl->allow('Users', $resource, $action);
    }
}



