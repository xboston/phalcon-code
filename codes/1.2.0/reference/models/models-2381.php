<?php

$data = array(
    'stock'      => 100 ,
    'updated_at' => time()
);

//Update all the parts except these whose type is basic
$robots->getParts()->update(
    $data , function ($part) {
    if ( $part->type == Part::TYPE_BASIC ) {
        return false;
    }

    return true;
}

