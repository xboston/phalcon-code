<?php

class SessionController extends ControllerBase
{

    // ...

    private function _registerSession($user)
    {
        $this->session->set('auth', array(
            'id' => $user->id,
            'name' => $user->name
        ));
    }

    public function startAction()
    {
        if ($this->request->isPost()) {

            //Taking the variables sent by POST
            $email = $this->request->getPost('email', 'email');
            $password = $this->request->getPost('password');

            $password = sha1($password);

            //Find for the user in the database
            $user = Users::findFirst(array(
                "email = :email: AND password = :password: AND active = 'Y'",
                "bind" => array('email' => $email, 'password' => $password)
            ));
            if ($user != false) {

                $this->_registerSession($user);

                $this->flash->success('Welcome '.$user->name);

                //Forward to the 'invoices' controller if the user is valid
                return $this->dispatcher->forward(array(
                    'controller' => 'invoices',
                    'action' => 'index'
                ));
            }

            $this->flash->error('Wrong email/password');
        }

        //Forward to the login form again
        return $this->dispatcher->forward(array(
            'controller' => 'session',
            'action' => 'index'
        ));

    }

}

