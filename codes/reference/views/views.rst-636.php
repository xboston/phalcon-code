
    <?php

    class PostsController extends \Phalcon\Mvc\Controller
    {

        public function indexAction()
        {
            // Назначение шаблонизатора
            $this->view->registerEngines(
                array(
                    ".my-html" => "MyTemplateAdapter"
                )
            );
        }

        public function showAction()
        {
            // Использование нескольких шаблонизаторов
            $this->view->registerEngines(
                array(
                    ".my-html" => 'MyTemplateAdapter'
                    ".phtml" => 'Phalcon\Mvc\View\Engine\Php'
                )
            );
        }

    }

