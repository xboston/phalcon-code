
    <?php

     //Does andres have access to the customers resource to create?
     $acl->isAllowed('andres', 'Products', 'create');
    
     //Do guests have access to any resource to edit?
     $acl->isAllowed('guests', '*', 'edit');




