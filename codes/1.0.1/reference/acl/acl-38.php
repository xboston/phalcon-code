<?php

// Создаем роли
$roleAdmins = new \Phalcon\Acl\Role("Administrators", "Super-User role");
$roleGuests = new \Phalcon\Acl\Role("Guests");

// Добавляем "Guests" в список ACL
$acl->addRole($roleGuests);

// Добавляем "Designers" без класса Phalcon\Acl\Role
$acl->addRole("Designers");

