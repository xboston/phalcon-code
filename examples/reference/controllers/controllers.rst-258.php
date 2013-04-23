
    <?php

    class PostsController extends Phalcon\Mvc\Controller
    {

        public function indexAction()
        {

        }

        public function notFoundAction()
        {
            // Отправка 404 HTTP статуса
            $this->response->setStatusCode(404, "Not Found");
        }

    }

