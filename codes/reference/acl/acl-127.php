<?php

// Проверяем существует ли сериализованный файл
if (!file_exists("app/security/acl.data")) {

    $acl = new \Phalcon\Acl\Adapter\Memory();

    //... Определяем роли, ресурсы, доступ и т.д.

    // Сохраняем сериализованный объект в файл
    file_put_contents("app/security/acl.data", serialize($acl));

} else {

     // Восстанавливаем ACL объект из текстового файла
     $acl = unserialize(file_get_contents("app/security/acl.data"));
}

// Используем ACL
if ($acl->isAllowed("Guests", "Customers", "edit")) {
    echo "Доступ разрешен!";
} else {
    echo "Доступ запрещен :(";
}

