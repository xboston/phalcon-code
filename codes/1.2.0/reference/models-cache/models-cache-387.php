<?php

class Invoices extends \Phalcon\Mvc\Model
{

    public function initialize()
    {
        $this->belongsTo(
            "customers_id" ,
            "Customer" ,
            "id" ,
            array(
                 'reusable' => true
            )
        );
    }

}

