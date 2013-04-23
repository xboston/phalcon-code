
    <?php

    class Robots extends \Phalcon\Mvc\Model
    {
    
       public function initialize()
       {
           $this->skipAttributesOnUpdate(array('modified_in'));
       }
    
    }




