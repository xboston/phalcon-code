<?php

class Robots extends \Phalcon\Mvc\Model
{

   public function initialize()
   {
       $this->skipAttributesOnCreate(array('created_at'));
   }

}




