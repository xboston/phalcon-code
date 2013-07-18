<?php

use Phalcon\Mvc\Controller;

class SessionController extends Controller
{

    public function loginAction()
    {
        if ($this->request->isPost()) {
            if ($this->security->checkToken()) {
                //The token is ok
            }
        }
    }

}

