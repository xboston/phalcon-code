<?php

 $di = new Phalcon\DI();

 $di->set('modelsManager', function() {
      return new Phalcon\Mvc\Model\Manager();
 });

 $robot = new Robots($di);



