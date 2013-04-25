<?php

class Robots extends \Phalcon\Mvc\Collection
{

    public function validation()
    {
        if ($this->type == "Old") {
            $message = new Phalcon\Mvc\Model\Message(
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

