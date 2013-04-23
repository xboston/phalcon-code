
    <?php

    class UsersController extends \Phalcon\Mvc\Controller
    {

        public function closeSessionAction()
        {
            // Отключение представления
            $this->view->disable();
        }

    }

