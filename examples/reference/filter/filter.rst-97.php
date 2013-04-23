
    <?php

    $filter = new \Phalcon\Filter();

    // возвращает "Hello"
    $filter->filter("<h1>Hello</h1>", "striptags");

    // возвращает "Hello"
    $filter->filter("  Hello   ", "trim");


