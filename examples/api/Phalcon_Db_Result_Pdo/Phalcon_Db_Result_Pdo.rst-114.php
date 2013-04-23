
    <?php

    //Return array with integer indexes
    $result->setFetchMode(Phalcon\Db::FETCH_NUM);
    
    //Return associative array without integer indexes
    $result->setFetchMode(Phalcon\Db::FETCH_ASSOC);
    
    //Return associative array together with integer indexes
    $result->setFetchMode(Phalcon\Db::FETCH_BOTH);
    
    //Return an object
    $result->setFetchMode(Phalcon\Db::FETCH_OBJ);




