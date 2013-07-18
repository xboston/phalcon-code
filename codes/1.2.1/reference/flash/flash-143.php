<?php

class ContactController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {

    }

    public function saveAction()
    {

        //store the post

        //Using session flash
        $this->flashSession->success("Your information were stored correctly!");

        //Make a full HTTP redirection
        return $this->response->redirect("contact/index");
    }

}

