<?php

use Phalcon\Mvc\Model,
    Phalcon\Mvc\Model\Message;

class Robots extends Model
{

    public function validation()
    {
        if ($this->type == "Old") {
            $message = new Message(
                "Sorry, old robots are not allowed anymore",
                "type",
                "MyType"
            );
            $this->appendMessage($message);
            return false;
        }
        return true;
    }

}

