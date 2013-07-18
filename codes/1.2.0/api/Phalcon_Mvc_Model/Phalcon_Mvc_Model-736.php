<?php

class Robots extends \Phalcon\Mvc\Model
{

    public function initialize()
    {
        $this->skipAttributes(array( 'price' ));
    }

}




