<?php

class Brands extends Phalcon\Mvc\Model
{

    public $id;

    public $name;

    /**
     * The model Brands is mapped to the "sample_brands" table
     */
    public function getSource()
    {
        return 'sample_brands';
    }

    /**
     * A Brand can have many Cars
     */
    public function initialize()
    {
        $this->hasMany('id', 'Cars', 'brand_id');
    }
}

