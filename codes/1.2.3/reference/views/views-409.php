<?php

class UsersController extends \Phalcon\Mvc\Controller
{

    public function closeSessionAction()
    {
        //Close session
        //...

        //An HTTP Redirect
        return $this->response->redirect('index/index');
    }

}

