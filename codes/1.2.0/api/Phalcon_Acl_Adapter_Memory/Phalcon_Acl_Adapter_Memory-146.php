<?php

//Allow access to guests to search on customers
$acl->allow('guests' , 'customers' , 'search');

//Allow access to guests to search or create on customers
$acl->allow('guests' , 'customers' , array( 'search' , 'create' ));

//Allow access to any role to browse on products
$acl->allow('*' , 'products' , 'browse');

//Allow access to any role to browse on any resource
$acl->allow('*' , '*' , 'browse');




