<?php

//Add a resource to the the list allowing access to an action
$acl->addResource(new Phalcon\Acl\Resource('customers') , 'search');
$acl->addResource('customers' , 'search');

//Add a resource  with an access list
$acl->addResource(new Phalcon\Acl\Resource('customers') , array( 'create' , 'search' ));
$acl->addResource('customers' , array( 'create' , 'search' ));




