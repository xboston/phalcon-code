<?php

class PostsController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {

    }

    public function showAction($year, $postTitle)
    {
        $this->flash->error("You don't have permission to access this area");

        // Forward flow to another action
        $this->dispatcher->forward(array(
            "controller" => "users",
            "action" => "signin"
        ));
    }

}

