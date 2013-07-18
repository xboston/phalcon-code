<?php

$this->view->registerEngines(
    array(
         ".phtml" => "Phalcon\Mvc\View\Engine\Php" ,
         ".volt"  => "Phalcon\Mvc\View\Engine\Volt" ,
         ".mhtml" => "MyCustomEngine"
    )
);




