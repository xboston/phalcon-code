<?php

class Products extends \Phalcon\Mvc\Model
{

    /**
     * @var integer
     */
    protected $id;

    /**
     * @var integer
     */
    protected $types_id;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $price;

    /**
     * @var integer
     */
    protected $quantity;

    /**
     * @var string
     */
    protected $status;


    /**
     * Method to set the value of field id
     *
     * @param integer $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * Method to set the value of field types_id
     *
     * @param integer $types_id
     */
    public function setTypesId($types_id)
    {
        $this->types_id = $types_id;
    }

...

    /**
     * Returns the value of field status
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

}

