<?php

class Robots extends \Phalcon\Mvc\Model
{
    public function beforeCreate()
    {
        if ($this->price > 10000) {
            $this->type = new \Phalcon\Db\RawValue('default');
        }
    }
}

