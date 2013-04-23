
    <?php

    $filter = new \Phalcon\Filter();

    // возвращает "someone@example.com"
    $filter->sanitize("some(one)@exa\mple.com", "email");

    // возвращает "hello"
    $filter->sanitize("hello<<", "string");

    // возвращает "100019"
    $filter->sanitize("!100a019", "int");

    // возвращает "100019.01"
    $filter->sanitize("!100a019.01a", "float");


