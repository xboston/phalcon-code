<?php

class Robots extends \Phalcon\Mvc\Model
{
    public $id;

    public $name;

    public function initialize()
    {
        $this->hasMany("id", "RobotsParts", "robots_id");
    }

}

