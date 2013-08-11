<?php

class Robots extends \Phalcon\Mvc\Model
{

    public function initialize()
    {
        $this->setSource("the_robots");
    }

}

