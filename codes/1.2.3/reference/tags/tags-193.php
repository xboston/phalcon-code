<?php

// Using data from a resultset
echo $this->tag->select(
    array(
        "productId",
        Products::find("type = 'vegetables'"),
        "using" => array("id", "name")
    )
);

// Using data from an array
echo $this->tag->selectStatic(
    array(
        "status",
        array(
            "A" => "Active",
            "I" => "Inactive",
        )
    )
);

