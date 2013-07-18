<?php

//Set the views cache service
$di->set(
    'viewCache' ,
    function () {

        //Cache data for one day by default
        $frontCache = new \Phalcon\Cache\Frontend\Output(array(
                                                              "lifetime" => 86400
                                                         ));

        //Memcached connection settings
        $cache = new \Phalcon\Cache\Backend\Memcache($frontCache , array(
                                                                        "host" => "localhost" ,
                                                                        "port" => "11211"
                                                                   ));

        return $cache;
    }
);

