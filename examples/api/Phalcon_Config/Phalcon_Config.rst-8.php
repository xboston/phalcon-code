
    <?php

    $config = new Phalcon\Config(array(
    	"database" => array(
    		"adapter" => "Mysql",
    		"host" => "localhost",
    		"username" => "scott",
    		"password" => "cheetah",
    		"name" => "test_db"
    	),
    	"phalcon" => array(
    		"controllersDir" => "../app/controllers/",
    		"modelsDir" => "../app/models/",
    		"viewsDir" => "../app/views/"
    	)
     ));



