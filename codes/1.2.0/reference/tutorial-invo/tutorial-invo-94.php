<?php

$loader = new \Phalcon\Loader();

$loader->registerDirs(
    array(
         $config->application->controllersDir ,
         $config->application->pluginsDir ,
         $config->application->libraryDir ,
         $config->application->modelsDir ,
    )
)->register();

