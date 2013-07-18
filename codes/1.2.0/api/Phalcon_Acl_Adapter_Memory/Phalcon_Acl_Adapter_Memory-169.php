<?php

//Deny access to guests to search on customers
$acl->deny('guests' , 'customers' , 'search');

//Deny access to guests to search or create on customers
$acl->deny('guests' , 'customers' , array( 'search' , 'create' ));

//Deny access to any role to browse on products
$acl->deny('*' , 'products' , 'browse');

//Deny access to any role to browse on any resource
$acl->deny('*' , '*' , 'browse');




