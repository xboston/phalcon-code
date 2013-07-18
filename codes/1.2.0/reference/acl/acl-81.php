<?php

// Check whether role has access to the operations
$acl->isAllowed("Guests" , "Customers" , "edit"); //Returns 0
$acl->isAllowed("Guests" , "Customers" , "search"); //Returns 1
$acl->isAllowed("Guests" , "Customers" , "create"); //Returns 1

