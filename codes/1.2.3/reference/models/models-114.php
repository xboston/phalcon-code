<?php

class Robots extends \Phalcon\Mvc\Model
{
    protected $id;

    protected $name;

    protected $price;

    public function getId()
    {
        return $this->id;
    }

    public function setName($name)
    {
        //The name is too short?
        if (strlen($name) < 10) {
            throw new \InvalidArgumentException('The name is too short');
        }
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setPrice($price)
    {
        //Negative prices aren't allowed
        if ($price < 0) {
            throw new \InvalidArgumentException('Price can\'t be negative');
        }
        $this->price = $price;
    }

    public function getPrice()
    {
        //Convert the value to double before be used
        return (double) $this->price;
    }
}

