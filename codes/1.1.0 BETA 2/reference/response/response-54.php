<?php

// Установка по имени
$response->setHeader("Content-Type", "application/pdf");
$response->setHeader("Content-Disposition", 'attachment; filename="downloaded.pdf"');

// Установка напрямую
$response->setRawHeader("HTTP/1.1 200 OK");

