
    <?php

    class PostsController extends \Phalcon\Mvc\Controller
    {

        public function indexAction()
        {

        }

        public function showAction()
        {
            // Передать все посты в представление
            $this->view->setVar("posts", Posts:find());
        }

    }

