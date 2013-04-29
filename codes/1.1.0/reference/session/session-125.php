<?php

class UserController extends Phalcon\Mvc\Controller
{

    public function indexAction()
    {
        // Create a persistent variable "name"
        $this->persistent->name = "Laura";
    }

    public function welcomeAction()
    {
        if (isset($this->persistent->name))
        {
            echo "Welcome, ", $this->persistent->name;
        }
    }

}

