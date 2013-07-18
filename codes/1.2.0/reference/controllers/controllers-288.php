<?php

class UserController extends Phalcon\Mvc\Controller
{

    public function indexAction()
    {
        $this->persistent->name = "Michael";
    }

    public function welcomeAction()
    {
        echo "Welcome, " , $this->persistent->name;
    }

}

