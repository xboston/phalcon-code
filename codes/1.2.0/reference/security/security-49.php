<?php

use Phalcon\Mvc\Controller;

class SessionController extends Controller
{

    public function loginAction()
    {

        $login    = $this->request->getPost('login');
        $password = $this->request->getPost('password');

        $user = Users::findFirst(
            array(
                 "login = ?0" ,
                 "bind" => array( $login )
            )
        );
        if ( $user ) {
            if ( $this->security->checkHash($password , $user->password) ) {
                //The password is valid
            }
        }

        //The validation failed
    }

}

