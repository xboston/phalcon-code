<?php

//Cache the file for 2 days
$frontendOptions = array(
    'lifetime' => 172800
);

  //Create a output cache
  $frontCache = \Phalcon\Cache\Frontend\Output($frontOptions);

//Set the cache directory
$backendOptions = array(
    'cacheDir' => '../app/cache/'
);

  //Create the File backend
  $cache = new \Phalcon\Cache\Backend\File($frontCache, $backendOptions);

$content = $cache->start('my-cache');
if ($content === null) {
      echo '<h1>', time(), '</h1>';
      $cache->save();
} else {
    echo $content;
}



