<?php

class Invoices extends Phalcon\Mvc\Model
{

    protected static function _createKey($parameters)
    {
        // .. create a cache key based on the parameters
    }

    protected static function _getCache($key)
    {
        // returns data from a cache
    }

    protected static function _setCache($key)
    {
        // stores data in the cache
    }

    public static function find($parameters=null)
    {
        //Create a unique key
        $key = self::_createKey($parameters);

        //Check if there are data in the cache
        $results = self::_getCache($key);

        // Valid data is an object
        if (is_object($results)) {
            return $results;
        }

        $results = array();

        $invoices = parent::find($parameters);
        foreach ($invoices as $invoice) {

            //Query the related customer
            $customer = $invoice->customer;

            //Assign it to the record
            $invoice->customer = $customer;

            $results[] = $invoice;
        }

        //Store the invoices in the cache + their customers
        self::_setCache($key, $results);

        return $results;
    }

    public function initialize()
    {
        // add relations and initialize other stuff
    }
}

