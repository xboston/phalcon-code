<?php

namespace Store\Models;

use Phalcon\Mvc\Model
    Phalcon\Mvc\Model\Relation;

class Robots extends Model
{

    public $id;

    public $name;

    public function initialize()
    {
        $this->hasMany('id', 'Store\\Models\Parts', 'robots_id', array(
            'foreignKey' => array(
                'action' => Relation::ACTION_CASCADE
            )
        ));
    }

}

