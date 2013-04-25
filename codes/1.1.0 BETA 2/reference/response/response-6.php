<?php

// Получение экземпляра Response
$response = new \Phalcon\Http\Response();

// Установка кода статуса
$response->setRawHeader(404, "Not Found");

// Установка содержимого ответа
$response->setContent("Сожалеем, но страница не существует");

// Отправка ответа клиенту
$response->send();

