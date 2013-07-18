<?php

use Phalcon\Mvc\Model\Validator\InclusionIn , Phalcon\Mvc\Model\Validator\Numericality;

class Robots extends \Phalcon\Mvc\Collection
{

    public function validation()
    {

        $this->validate(
            new InclusionIn(array(
                                 "field"   => "type" ,
                                 "message" => "Type must be: mechanical or virtual"
                "domain" => array( "Mechanical" , "Virtual" )
            )
        ));

        $this->validate(
            new Numericality(array(
                                  "field"   => "price" ,
                                  "message" => "Price must be numeric"
                             ))
        );

        return $this->validationHasFailed() != true;
    }

}

