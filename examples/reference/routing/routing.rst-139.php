
    <?php

    class PostsController extends \Phalcon\Mvc\Controller
    {

        public function indexAction()
        {

        }

        public function showAction()
        {

            // Возвращает параметр "year"
            $year = $this->dispatcher->getParam("year");

            // Возвращает параметр "month"
            $month = $this->dispatcher->getParam("month");

            // Возвращает параметр "day"
            $day = $this->dispatcher->getParam("day");

        }

    }

