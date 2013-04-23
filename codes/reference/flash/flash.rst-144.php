
    <?php

    class ContactController extends \Phalcon\Mvc\Controller
    {

        public function indexAction()
        {

        }

        public function saveAction()
        {

            // сохраняем объект в бд

            // Отправляем сообщение в сессию
            $this->flashSession->success("Your information were stored correctly!");

            // Делаем полное HTTP перенаправление
            return $this->response->redirect("contact/index");
        }

    }

