<?php

class Customers extends \Phalcon\Mvc\Model
{

    public function validation()
    {
        $this->validate(new MaxMinValidator(
            array(
                "field"  => "price",
                "min" => 10,
                "max" => 100
            )
        ));
        if ($this->validationHasFailed() == true) {
            return false;
        }
    }

}

