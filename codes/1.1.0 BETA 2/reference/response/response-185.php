<?php

// Формирование значения E-Tag основанное на последнем времени изменения новости
$recentDate = News::maximum(array('column' => 'created_at'));
$eTag = md5($recentDate);

// Отправка E-Tag
$response->setHeader('E-Tag', $eTag);


