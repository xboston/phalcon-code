<?php

use Phalcon\Mvc\Model\Behavior\Timestampable;

class Users extends \Phalcon\Mvc\Model
{
    public $id;

    public $name;

    public $created_at;

    public function initialize()
    {
        $this->addBehavior(
            new Timestampable(array(
                                   'beforeCreate' => array(
                                       'field'  => 'created_at' ,
                                       'format' => 'Y-m-d'
                                   )
                              ))
        );
    }

}

