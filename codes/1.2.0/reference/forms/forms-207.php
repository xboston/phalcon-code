<?php

if ( !$form->isValid($_POST) ) {
    foreach ( $form->getMessages() as $message ) {
        echo $message , '<br>';
    }
}

