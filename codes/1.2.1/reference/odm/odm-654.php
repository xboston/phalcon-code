<?php

class Robots extends Phalcon\Mvc\Collection
{
    public function initialize()
    {
        $this->useImplicitObjectIds(false);
    }
}

