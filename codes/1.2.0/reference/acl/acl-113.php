<?php

//Check whether acl data already exist
if ( !file_exists("app/security/acl.data") ) {

    $acl = new \Phalcon\Acl\Adapter\Memory();

    //... Define roles, resources, access, etc

    // Store serialized list into plain file
    file_put_contents("app/security/acl.data" , serialize($acl));

} else {

    //Restore acl object from serialized file
    $acl = unserialize(file_get_contents("app/security/acl.data"));
}

// Use acl list as needed
if ( $acl->isAllowed("Guests" , "Customers" , "edit") ) {
    echo "Access granted!";
} else {
    echo "Access denied :(";
}

