<?php

// Проверяем, имеет ли роль "Guests" доступ к разным операциям по отношению к ресурсу "Customers"
$acl->isAllowed("Guests", "Customers", "edit");   // Возвращает 0
$acl->isAllowed("Guests", "Customers", "search"); // Возвращает 1
$acl->isAllowed("Guests", "Customers", "create"); // Возвращает 1

