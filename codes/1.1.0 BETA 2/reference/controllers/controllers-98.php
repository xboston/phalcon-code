<?php

class PostsController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {

    }

    public function showAction($year, $postTitle)
    {
        $this->flash->error("У вас недостаточно прав для выполнения этого действия");

        // Перенаправление на другое действие
        $this->dispatcher->forward(array(
            "controller" => "users",
            "action" => "signin"
        ));
    }

}

