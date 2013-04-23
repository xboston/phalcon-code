<?php

foreach ($robots->getParts() as $part) {
    $part->stock = 100;
    $part->updated_at = time();
    if ($part->update() == false) {
        foreach ($part->getMessages() as $message) {
            echo $message;
        }
        break;
    }
}

