<?php

//Cache data for 2 days
$frontCache = new Phalcon\Cache\Frontend\Data(array(
    'lifetime' => 172800
));

  $cache = new Phalcon\Cache\Backend\Apc($frontCache, array(
      'prefix' => 'app-data'
  ));

//Cache arbitrary data
$cache->save('my-data', array(1, 2, 3, 4, 5));

//Get data
$data = $cache->get('my-data');



