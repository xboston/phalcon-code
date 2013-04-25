<?php

class Robots extends \Phalcon\Mvc\Model
{

   public function initialize()
   {
       $this->hasOne('id', 'RobotsDescription', 'robots_id');
   }

}




