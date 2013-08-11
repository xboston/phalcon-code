<?php

class Robots extends \Phalcon\Mvc\Model
{

   public function initialize()
   {
       //Setup a many-to-many relation to Parts through RobotsParts
       $this->hasManyToMany(
        'id',
        'RobotsParts',
        'robots_id',
        'parts_id',
        'Parts',
        'id'
    );
   }

}




