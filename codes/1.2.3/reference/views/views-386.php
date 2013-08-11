<?php

class UsersController extends \Phalcon\Mvc\Controller
{

    public function closeSessionAction()
    {
        //Close session
        //...

        //An HTTP Redirect
        $this->response->redirect('index/index');

        //Disable the view to avoid rendering
        $this->view->disable();
    }

}

