<?php

//Private area resources (backend)
$privateResources = array(
    'companies' => array('index', 'search', 'new', 'edit', 'save', 'create', 'delete'),
    'products' => array('index', 'search', 'new', 'edit', 'save', 'create', 'delete'),
    'producttypes' => array('index', 'search', 'new', 'edit', 'save', 'create', 'delete'),
    'invoices' => array('index', 'profile')
);
foreach ($privateResources as $resource => $actions) {
    $acl->addResource(new Phalcon\Acl\Resource($resource), $actions);
}

//Public area resources (frontend)
$publicResources = array(
    'index' => array('index'),
    'about' => array('index'),
    'session' => array('index', 'register', 'start', 'end'),
    'contact' => array('index', 'send')
);
foreach ($publicResources as $resource => $actions) {
    $acl->addResource(new Phalcon\Acl\Resource($resource), $actions);
}

