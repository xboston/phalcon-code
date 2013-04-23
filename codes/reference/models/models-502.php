<?php

class Parts extends \Phalcon\Mvc\Model
{

    public $id;

    public $name;

    public function initialize()
    {
        $this->hasMany("id", "RobotsParts", "parts_id");
    }

}

