<?php

// Cache the data for 2 days
$frontCache = new Phalcon\Cache\Frontend\Json(array(
                                                   "lifetime" => 172800
                                              ));

* //Create the Cache setting memcached connection options
$cache = new Phalcon\Cache\Backend\Memcache($frontCache , array(
                                                               'host'       => 'localhost' ,
                                                               'port'       => 11211 ,
                                                               'persistent' => false
                                                          ));

//Cache arbitrary data
$cache->save('my-data' , array( 1 , 2 , 3 , 4 , 5 ));

//Get data
$data = $cache->get('my-data');



