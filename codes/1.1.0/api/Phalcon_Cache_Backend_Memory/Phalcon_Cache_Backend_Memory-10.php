<?php

//Cache data
$frontCache = new Phalcon\Cache\Frontend\Data();

  $cache = new Phalcon\Cache\Backend\Memory($frontCache);

//Cache arbitrary data
$cache->save('my-data', array(1, 2, 3, 4, 5));

//Get data
$data = $cache->get('my-data');



