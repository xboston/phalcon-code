<?php

 $session = new Phalcon\Session\Adapter\Files(array(
    'uniqueId' => 'my-private-app'
 ));

 $session->start();

 $session->set('var', 'some-value');

 echo $session->get('var');



