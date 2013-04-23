
    <?php

    //Returns value from $_GET["id"] without sanitizing
    $id = $request->getQuery("id");
    
    //Returns value from $_GET["id"] with sanitizing
    $id = $request->getQuery("id", "int");
    
    //Returns value from $_GET["id"] with a default value
    $id = $request->getQuery("id", null, 150);




