<?php

class UserController extends Phalcon\Mvc\Controller
{

    public function indexAction()
    {
        // Установка значения сессии
        $this->session->set("user-name", "Michael");
    }

    public function welcomeAction()
    {

        // Проверка наличия переменной сессии
        if ($this->session->has("user-name")) {

            // Получение значения
            $name = $this->session->get("user-name");
        }
    }

}

