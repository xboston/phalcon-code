<?php

class ContactController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {

    }

    public function saveAction()
    {

        // сохраняем объект в бд

        // Выводим прямое сообщение
        $this->flash->success("Your information were stored correctly!");

        // Делаем внутреннее перенапрвляем на другое действие
        return $this->dispatcher->forward(array("action" => "index"));
    }

}

