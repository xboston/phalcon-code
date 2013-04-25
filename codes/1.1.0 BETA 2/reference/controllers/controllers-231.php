<?php

class PostsController extends Phalcon\Mvc\Controller
{

    public function indexAction()
    {

    }

    public function saveAction()
    {
        // Проверка что данные пришли методом POST
        if ($this->request->isPost() == true) {
            // Доступ к POST данным
            $customerName = $this->request->getPost("name");
            $customerBorn = $this->request->getPost("born");
        }
    }

}

