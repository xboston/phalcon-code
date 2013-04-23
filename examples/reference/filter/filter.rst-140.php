
    <?php

    $filter = new \Phalcon\Filter();

    // Используем анонимную функцию
    $filter->add('md5', function($value) {
        return preg_replace('/[^0-9a-f]/', '', $value);
    });

    // Используем "md5" фильтр
    $filtered = $filter->sanitize($possibleMd5, "md5");

