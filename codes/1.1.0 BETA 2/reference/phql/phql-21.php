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
     * Эта модель отображается на таблицу sample_cars
     */
    public function getSource()
    {
        return 'sample_cars';
    }

    /**
     * Автомобиль может быть всего лишь одной марки, в то время как одну марку могут иметь множество автомобилей
     */
    public function initialize()
    {
        $this->belongsTo('brand_id', 'Brands', 'id');
    }
}

