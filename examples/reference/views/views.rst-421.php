
    <?php

    class ProductsController extends \Phalcon\Mvc\Controller
    {

        public function listAction()
        {
            // Использовать в качестве представления для отрисовки "views-dir/products/search"
            $this->view->pick("products/search");
        }

    }

