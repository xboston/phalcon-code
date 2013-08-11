<?php

class SignupController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {

    }

    public function registerAction()
    {

        // Request variables from html form
        $name  = $this->request->getPost("name", "string");
        $email = $this->request->getPost("email", "email");

        // Stop execution and show a backtrace
        return xdebug_print_function_stack("stop here!");

        $user        = new Users();
        $user->name  = $name;
        $user->email = $email;

        // Store and check for errors
        $user->save();
    }

}

