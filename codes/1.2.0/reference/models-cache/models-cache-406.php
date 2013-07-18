<?php

class CustomModelsManager extends \Phalcon\Mvc\Model\Manager
{

    /**
     * Returns a reusable object from the cache
     *
     * @param string $modelName
     * @param string $key
     *
     * @return object
     */
    public function getReusableRecords($modelName , $key)
    {

        //If the model is Products use the APC cache
        if ( $modelName == 'Products' ) {
            return apc_fetch($key);
        }

        //For the rest, use the memory cache
        return parent::getReusableRecords($modelName , $key);
    }

    /**
     * Stores a reusable record in the cache
     *
     * @param string $modelName
     * @param string $key
     * @param mixed  $records
     */
    public function setReusableRecords($modelName , $key , $records)
    {

        //If the model is Products use the APC cache
        if ( $modelName == 'Products' ) {
            apc_store($key , $records);

            return;
        }

        //For the rest, use the memory cache
        parent::setReusableRecords($modelName , $key , $records);
    }
}

