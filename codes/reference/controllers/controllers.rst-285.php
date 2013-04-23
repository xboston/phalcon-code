
    <?php

    class UserController extends Phalcon\Mvc\Controller
    {

        public function indexAction()
        {
            $this->persistent->name = "Колюня";
        }

        public function welcomeAction()
        {
            echo "Привет, ", $this->persistent->name;
        }

    }

