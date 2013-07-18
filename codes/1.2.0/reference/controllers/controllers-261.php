<?php

class PostsController extends Phalcon\Mvc\Controller
{

    public function indexAction()
    {

    }

    public function notFoundAction()
    {
        // Send a HTTP 404 response header
        $this->response->setStatusCode(404 , "Not Found");
    }

}

