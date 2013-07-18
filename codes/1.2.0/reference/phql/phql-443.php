<?php

use Phalcon\Mvc\Model\Message;

class Cars extends Phalcon\Mvc\Model
{

    public function beforeCreate()
    {
        if ( $this->price < 10000 ) {
            $this->appendMessage(new Message("A car cannot cost less than $ 10,000"));

            return false;
        }
    }

}

