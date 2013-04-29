<?php

//Dispatch loop
while (!$finished) {

    $finished = true;

    $controllerClass = $controllerName."Controller";

    //Instantiating the controller class via autoloaders
    $controller = new $controllerClass();

    // Execute the action
    call_user_func_array(array($controller, $actionName . "Action"), $params);

    // Finished should be reloaded to check if the flow was forwarded to another controller
    // $finished = false;

}

