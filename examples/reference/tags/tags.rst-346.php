
    <?php

    class ProductsController extends \Phalcon\Mvc\Controller
    {

        public function indexAction()
        {
            Phalcon\Tag::setDefault("color", "Blue");
        }

    }

