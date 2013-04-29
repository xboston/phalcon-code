<?php

class ProductsController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {

    }

    public function saveAction()
    {

        // Sanitizing price from input
        $price = $this->request->getPost("price", "double");

        // Sanitizing email from input
        $email = $this->request->getPost("customerEmail", "email");

    }

}

