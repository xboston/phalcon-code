<?php

use Phalcon\Mvc\Model\Behaviors\Timestampable;

class Robots extends \Phalcon\Mvc\Model
{

   public function initialize()
   {
    $this->addBehavior(new Timestampable(
        'onCreate' => array(
            'field' => 'created_at',
            'format' => 'Y-m-d'
        )
    ));
   }

}




