<?php

class Robots extends Phalcon\Mvc\Model
{

    public function beforeDelete()
    {
        if ($this->status == 'A') {
            echo "The robot is active, it can't be deleted";
            return false;
        }
        return true;
    }

}

