<?php

// Получение заголовка Http-X-Requested-With
$requestedWith = $response->getHeader("X_REQUESTED_WITH");
if ($requestedWith == "XMLHttpRequest") {
    echo "Запрос отправлен через Ajax";
}

// Или так
if ($request->isAjax()) {
    echo "The request was made with Ajax";
}

// Проверка уровня запроса
if ($request->isSecureRequest() == true) {
    echo "The request was made using a secure layer";
}

// Получение IP сервера, например 192.168.0.100
$ipAddress = $request->getServerAddress();

// Получение IP клиента, например 201.245.53.51
$ipAddress = $request->getClientAddress();

// Получение строки User Agent (HTTP_USER_AGENT)
$userAgent = $request->getUserAgent();

// Получение оптимального типа контента для браузера, например text/xml
$contentType = $request->getAcceptableContent();

// Получение лучшей кодировки для браузера, например utf-8
$charset = $request->getBestCharset();

// Получение лучшего языка на котрый настроен браузер, например en-us
$language = $request->getBestLanguage();


