<?php

$volt = new \Phalcon\Mvc\View\Engine\Volt($view , $di);

$compiler = $volt->getCompiler();

//This binds the function 'shuffle' in Volt to the PHP function 'str_shuffle'
$compiler->addFunction('shuffle' , 'str_shuffle');

