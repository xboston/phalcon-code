<?php

// Create some roles
$roleAdmins = new \Phalcon\Acl\Role("Administrators", "Super-User role");
$roleGuests = new \Phalcon\Acl\Role("Guests");

// Add "Guests" role to acl
$acl->addRole($roleGuests);

// Add "Designers" role to acl without a Phalcon\Acl\Role
$acl->addRole("Designers");

