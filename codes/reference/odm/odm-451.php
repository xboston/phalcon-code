<?php

use Phalcon\Mvc\Model\Validator\InclusionIn;
use Phalcon\Mvc\Model\Validator\Uniqueness;

class Robots extends \Phalcon\Mvc\Collection
{

    public function validation()
    {

        $this->validate(new InclusionIn(
            array(
                "field"  => "type",
                "domain" => array("Mechanical", "Virtual")
            )
        ));

        $this->validate(new Uniqueness(
            array(
                "field"   => "name",
                "message" => "The robot name must be unique"
            )
        ));

        return $this->validationHasFailed() != true;
    }

}

