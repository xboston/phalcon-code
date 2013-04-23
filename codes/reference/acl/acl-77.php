<?php

// Задаем уровень доступа для ролей на определенный ресурс
$acl->allow("Guests", "Customers", "search");
$acl->allow("Guests", "Customers", "create");
$acl->deny("Guests", "Customers", "update");

