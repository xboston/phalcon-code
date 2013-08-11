<?php

class Robots extends Phalcon\Mvc\Model
{

    protected static $_cache = array();

    /**
     * Implement a method that returns a string key based
     * on the query parameters
     */
    protected static function _createKey($parameters)
    {
        $uniqueKey = array();
        foreach ($parameters as $key => $value) {
            if (is_scalar($value)) {
                $uniqueKey[] = $key . ':' . $value;
            } else {
                if (is_array($value)) {
                    $uniqueKey[] = $key . ':[' . self::_createKey($value) .']';
                }
            }
        }
        return join(',', $uniqueKey);
    }

    public static function find($parameters=null)
    {

        //Create an unique key based on the parameters
        $key = self::_createKey($parameters);

        if (!isset(self::$_cache[$key])) {
            //Store the result in the memory cache
            self::$_cache[$key] = parent::find($parameters);
        }

        //Return the result in the cache
        return self::$_cache[$key];
    }

    public static function findFirst($parameters=null)
    {
        // ...
    }

}

