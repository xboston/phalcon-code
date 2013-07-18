<?php

class SessionController extends Phalcon\Mvc\Controller
{
    public function loginAction()
    {
        //Check if the cookie has previously set
        if ($this->cookies->has('remember-me')) {

            //Get the cookie
            $rememberMe = $this->cookies->get('remember-me');

            //Get the cookie's value
            $value = $rememberMe->getValue();

        }
    }

    public function startAction()
    {
        $this->cookies->set('remember-me', 'some value', time() + 15 * 86400);
    }
}

