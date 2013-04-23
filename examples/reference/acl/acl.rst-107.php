
    <?php

    // Создаем несколько ролей
    $roleAdmins = new \Phalcon\Acl\Role("Administrators", "Super-User role");
    $roleGuests = new \Phalcon\Acl\Role("Guests");

    // Добавляем роль "Guests"
    $acl->addRole($roleGuests);

    // Добавляем роль "Administrators" наследуемую от роли "Guests"
    $acl->addRole($roleAdmins, $roleGuests);

