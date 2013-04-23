
    <?php

    class UserController extends Phalcon\Mvc\Controller
    {

        public function removeAction()
        {
            // Удаление переменной сессии
            $this->session->remove("user-name");
        }

        public function logoutAction()
        {
            // Полная очистка сессии
            $this->session->destroy();
        }

    }

