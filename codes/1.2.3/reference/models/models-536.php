<?php

class Robots extends Phalcon\Mvc\Model
{

    public $id;

    public $name;

    public $status;

    public function beforeSave()
    {
        //Convert the array into a string
        $this->status = join(',', $this->status);
    }

    public function afterFetch()
    {
        //Convert the string to an array
        $this->status = explode(',', $this->status);
    }
}

