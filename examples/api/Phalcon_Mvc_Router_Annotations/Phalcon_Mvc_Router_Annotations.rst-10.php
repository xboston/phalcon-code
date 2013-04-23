
    <?php

     $di['router'] = function() {
    
    	//Use the annotations router
    	$router = new \Phalcon\Mvc\Router\Annotations(false);
    
    	//This will do the same as above but only if the handled uri starts with /robots
     		$router->addResource('Robots', '/robots');
    
     		return $router;
    };



