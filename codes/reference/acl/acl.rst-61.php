
    <?php

    // Определяем ресурс "Customers"
    $customersResource = new \Phalcon\Acl\Resource("Customers");

    // Добавим ресурс "Customers" с несколькими операциями
    $acl->addResource($customersResource, "search");
    $acl->addResource($customersResource, array("create", "update"));

