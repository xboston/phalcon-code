<?php

use Phalcon\Mvc\Controller;

class PostsController extends Controller
{

    public function indexAction()
    {

    }

    public function saveAction()
    {

        // Check if request has made with POST
        if ($this->request->isPost() == true) {

            // Access POST data
            $customerName = $this->request->getPost("name");
            $customerBorn = $this->request->getPost("born");

        }

    }

}

