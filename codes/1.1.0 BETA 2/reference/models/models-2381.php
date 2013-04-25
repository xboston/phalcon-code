<?php

foreach ($robots->getParts() as $part) {
    if ($part->delete() == false) {
        foreach ($part->getMessages() as $message) {
            echo $message;
        }
        break;
    }
}

