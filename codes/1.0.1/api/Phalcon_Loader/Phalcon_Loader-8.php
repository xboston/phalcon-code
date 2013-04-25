<?php

 //Creates the autoloader
 $loader = new Phalcon\Loader();

 //Register some namespaces
 $loader->registerNamespaces(array(
   'Example\Base' => 'vendor/example/base/',
   'Example\Adapter' => 'vendor/example/adapter/',
   'Example' => 'vendor/example/'
 ));

 //register autoloader
 $loader->register();

 //Requiring this class will automatically include file vendor/example/adapter/Some.php
 $adapter = Example\Adapter\Some();



