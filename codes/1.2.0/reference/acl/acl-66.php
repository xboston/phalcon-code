<?php

// Set access level for roles into resources
$acl->allow("Guests" , "Customers" , "search");
$acl->allow("Guests" , "Customers" , "create");
$acl->deny("Guests" , "Customers" , "update");

