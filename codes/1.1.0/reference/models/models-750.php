<?php

class Robots extends \Phalcon\Mvc\Model
{

    public $id;

    public $name;

    public function initialize()
    {
        $this->hasMany("id", "RobotsParts", "robots_id");
    }

    /**
     * Return the related "robots parts"
     *
     * @return \RobotsParts[]
     */
    public function getRobotsParts($parameters=null)
    {
        return $this->getRelated('RobotsParts', $parameters);
    }

}

