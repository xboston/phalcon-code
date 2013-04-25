<?php

//Delete only whose stock is greater or equal than zero
$robots->getParts()->delete(function($part) {
    if ($part->stock < 0) {
        return false;
    }
    return true;
});


