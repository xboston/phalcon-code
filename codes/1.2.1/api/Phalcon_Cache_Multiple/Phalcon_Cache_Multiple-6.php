<?php

   use Phalcon\Cache\Frontend\Data as DataFrontend,
       Phalcon\Cache\Multiple,
       Phalcon\Cache\Backend\Apc as ApcCache,
       Phalcon\Cache\Backend\Memcache as MemcacheCache,
       Phalcon\Cache\Backend\File as FileCache;

   $ultraFastFrontend = new DataFrontend(array(
       "lifetime" => 3600
   ));

   $fastFrontend = new DataFrontend(array(
       "lifetime" => 86400
   ));

   $slowFrontend = new DataFrontend(array(
       "lifetime" => 604800
   ));

   //Backends are registered from the fastest to the slower
   $cache = new Multiple(array(
       new ApcCache($ultraFastFrontend, array(
           "prefix" => 'cache',
       )),
       new MemcacheCache($fastFrontend, array(
           "prefix" => 'cache',
           "host" => "localhost",
           "port" => "11211"
       )),
       new FileCache($slowFrontend, array(
           "prefix" => 'cache',
           "cacheDir" => "../app/cache/"
       ))
   ));

   //Save, saves in every backend
   $cache->save('my-key', $data);



