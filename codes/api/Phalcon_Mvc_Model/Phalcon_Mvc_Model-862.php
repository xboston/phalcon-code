<?php

class Robots extends \Phalcon\Mvc\Model
{

   public function initialize()
   {
       //A reference relation must be set
       $this->hasMany('id', 'RobotsParts', 'robots_id');

       //Setup a many-to-many relation to Parts through RobotsParts
       $this->hasManyThrough('Parts', 'RobotsParts');
   }

}




