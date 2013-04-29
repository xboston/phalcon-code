<?php

class UserController extends Phalcon\Mvc\Controller
{

    public function indexAction()
    {
        //Set a session variable
        $this->session->set("user-name", "Michael");
    }

    public function welcomeAction()
    {

        //Check if the variable is defined
        if ($this->session->has("user-name")) {

            //Retrieve its value
            $name = $this->session->get("user-name");
        }
    }

}

