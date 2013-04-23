<?php

// Используем данные из resultset
echo Phalcon\Tag::select(
    array(
        "productId",
        Products::find("type = 'vegetables'"),
        "using" => array("id", "name")
    )
);

// Используем данные из массива
echo Phalcon\Tag::selectStatic(
    array(
        "status",
        array(
            "A" => "Active",
            "I" => "Inactive",
        )
    )
);

