
    <?php

    echo Phalcon\Tag::selectStatic(array(
    	"robotId",
    	Robots::find("type = 'mechanical'"),
    	"using" => array("id", "name")
     	));




