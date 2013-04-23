<?php

foreach ($form->getMessages(false) as $attribute => $messages) {
    echo 'Сообщение создано ', $attribute, ':', "\n";
    foreach ($messages as $message) {
        echo $message, '<br>';
    }
}


