<?php

class UserController extends Phalcon\Mvc\Controller
{

    public function removeAction()
    {
        //Remove a session variable
        $this->session->remove("user-name");
    }

    public function logoutAction()
    {
        //Destroy the whole session
        $this->session->destroy();
    }

}

