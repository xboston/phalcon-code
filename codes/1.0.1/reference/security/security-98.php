<?php

class SessionController extends Phalcon\Mvc\Controller
{

    public function loginAction()
    {
        if ($this->request->isPost()) {
            if ($this->security->checkToken()) {
                //Токен верный
            }
        }
    }

}

