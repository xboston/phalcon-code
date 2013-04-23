<?php

class Robots extends \Phalcon\Mvc\Collection
{
    public function initialize()
    {
        $this->setConnectionService('mongo1');
    }

}

