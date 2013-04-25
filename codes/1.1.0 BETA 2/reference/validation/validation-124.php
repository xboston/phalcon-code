<?php

class MyValidation extends Phalcon\Validation
{
    public function getMessages()
    {
        $messages = array();
        foreach (parent::getMessages() as $message) {
            switch ($message->getType()) {                    
                case 'PresenceOf':
                    $messages[] = 'Заполнение поля ' . $message->getField() . ' обязательно';
                    break;
            }
        }
        return $messages;
    }
}

