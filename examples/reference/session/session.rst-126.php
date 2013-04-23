
    <?php

    class UserController extends Phalcon\Mvc\Controller
    {

        public function indexAction()
        {
            // Создаётся постоянная (persistent) переменная "name"
            $this->persistent->name = "Laura";
        }

        public function welcomeAction()
        {
            if (isset($this->persistent->name))
            {
                echo "Привет, ", $this->persistent->name;
            }
        }

    }

