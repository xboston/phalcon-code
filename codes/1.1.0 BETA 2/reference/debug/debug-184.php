<?php

class SignupController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {

    }

    public function registerAction()
    {

        // Запрос переменных из html формы
        $name  = $this->request->getPost("name", "string");
        $email = $this->request->getPost("email", "email");

        // Останавливаем выполнение и выводим стек вызовов
        return xdebug_print_function_stack("stop here!");

        $user        = new Users();
        $user->name  = $name;
        $user->email = $email;

        // Сохраняем и проверяем на ощибки
        $user->save();
    }

}

