
    <?php

     $di = new Phalcon\DI();
    
     $di->set('collectionManager', function(){
          return new Phalcon\Mvc\Collection\Manager();
     });
    
     $robot = new Robots($di);



