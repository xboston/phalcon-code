<?php

class CacheableModel extends Phalcon\Mvc\Model
{

    protected static function _createKey($parameters)
    {
        // .. create a cache key based on the parameters
    }

    public static function find($parameters=null)
    {
        //.. custom caching strategy
    }

    public static function findFirst($parameters=null)
    {
        //.. custom caching strategy
    }
}

