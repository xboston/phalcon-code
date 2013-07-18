<?php

use \Phalcon\Mvc\Model\Message as Message;

class Robots extends Phalcon\Mvc\Model
{

    public function beforeSave()
    {
        if ( $this->name == 'Peter' ) {
            $message = new Message("Sorry, but a robot cannot be named Peter");
            $this->appendMessage($message);
        }
    }
}




