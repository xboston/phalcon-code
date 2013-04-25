<?php

class ProductsController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {

    }

    public function saveAction()
    {

        // Чистим price из ввода
        $price = $this->request->getPost("price", "double");

        // Чистим email из ввода
        $email = $this->request->getPost("customerEmail", "email");

    }

}

