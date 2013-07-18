<?php

class ContactController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {

    }

    public function saveAction()
    {

        //store the post

        //Using direct flash
        $this->flash->success("Your information were stored correctly!");

        //Forward to the index action
        return $this->dispatcher->forward(array( "action" => "index" ));
    }

}

