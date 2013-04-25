<?php

class Robots extends Phalcon\Mvc\Model
{
    public function initalize()
    {
        $this->keepSnapshots(true);
    }
}

