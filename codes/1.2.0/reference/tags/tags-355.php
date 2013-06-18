<?php

echo \Phalcon\Tag::selectStatic(
    array(
        "color",
        array(
            "Yellow" => "Yellow",
            "Blue"   => "Blue",
            "Red"    => "Red"
        )
    )
);

