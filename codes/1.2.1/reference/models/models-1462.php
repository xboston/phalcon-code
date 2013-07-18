<?php

class Products extends \Phalcon\Mvc\Model
{

    public function beforeCreate()
    {
        //Set the creation date
        $this->created_at = date('Y-m-d H:i:s');
    }

    public function beforeUpdate()
    {
        //Set the modification date
        $this->modified_in = date('Y-m-d H:i:s');
    }

}

