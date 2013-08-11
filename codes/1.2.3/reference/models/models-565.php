<?php

class Robots extends Phalcon\Mvc\Model
{
    public $id;

    public $name;

    public $status;

    public function getStatus()
    {
        return explode(',', $this->status)
    }

}

