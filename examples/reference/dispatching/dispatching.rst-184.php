
    <?php

    class PostsController extends \Phalcon\Mvc\Controller
    {

        public function indexAction()
        {

        }

        public function saveAction()
        {

            // Получение параметра title, находящимся в параметрах URL 
            $title = $this->dispatcher->getParam("title");

            // Получение параметра year, пришедшего из URL и отфильтрованного как число
            $year = $this->dispatcher->getParam("year", "int");
        }

    }

