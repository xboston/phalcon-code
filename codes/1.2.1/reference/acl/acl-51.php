<?php

// Define the "Customers" resource
$customersResource = new \Phalcon\Acl\Resource("Customers");

// Add "customers" resource with a couple of operations
$acl->addResource($customersResource, "search");
$acl->addResource($customersResource, array("create", "update"));

