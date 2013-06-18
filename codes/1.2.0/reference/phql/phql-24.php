<?php

class Cars extends Phalcon\Mvc\Model
{
    public $id;

    public $name;

    public $brand_id;

    public $price;

    public $year;

    public $style;

    /**
     * This model is mapped to the table sample_cars
     */
    public function getSource()
    {
        return 'sample_cars';
    }

    /**
     * A car only has a Brand, but a Brand have many Cars
     */
    public function initialize()
    {
        $this->belongsTo('brand_id', 'Brands', 'id');
    }
}

