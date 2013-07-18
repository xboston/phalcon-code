<?php

use Phalcon\Mvc\Micro\MiddlewareInterface;

/**
 * CacheMiddleware
 *
 * Caches pages to reduce processing
 */
class CacheMiddleware implements MiddlewareInterface
{
    public function call($application)
    {

        $cache = $application['cache'];
        $router = $application['router'];

        $key = preg_replace('/^[a-zA-Z0-9]/', '', $router->getRewriteUri());

        //Check if the request is cached
        if ($cache->exists($key)) {
            echo $cache->get($key);
            return false;
        }

        return true;
    }
}

