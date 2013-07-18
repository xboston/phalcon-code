<?php

class UsersController extends \Phalcon\Mvc\Controller
{

    public function closeSessionAction()
    {
        //Disable the view
        $this->view->disable();
    }

}

