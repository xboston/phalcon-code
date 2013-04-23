
    <?php

     // Cache data for 2 days
     $frontCache = new Phalcon\Cache\Frontend\Base64(array(
    	"lifetime" => 172800
     ));
    
     //Create a MongoDB cache
     $cache = new Phalcon\Cache\Backend\Mongo($frontCache, array(
    	'server' => "mongodb://localhost",
          'db' => 'caches',
    	'collection' => 'images'
     ));
    
     //Cache arbitrary data
     $cache->save('my-data', file_get_contents('some-image.jpg'));
    
     //Get data
     $data = $cache->get('my-data');



