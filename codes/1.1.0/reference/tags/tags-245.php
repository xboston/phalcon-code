<?php

// Creating a Select Tag with an empty option
echo Phalcon\Tag::select(
    array(
        "productId",
        Products::find("type = 'vegetables'"),
        "using" => array("id", "name"),
        "useEmpty" => true
    )
);

