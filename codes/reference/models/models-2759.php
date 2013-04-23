<?php

class Robots extends \Phalcon\Mvc\Model
{

    public function initialize()
    {
        $this->setConnectionService('dbPostgres');
    }

}

