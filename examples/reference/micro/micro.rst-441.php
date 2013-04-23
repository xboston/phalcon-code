
    <?php

    $app = new Phalcon\Mvc\Micro();

    $app['view'] = function() {
        $view = new \Phalcon\Mvc\View();
        $view->setViewsDir('app/views/');
        return $view;
    };

    //Return a rendered view
    $app->get('/products/show', function() use ($app) {

        // Render app/views/products/show.phtml passing some variables
        echo $app['view']->getRender('products', 'show', array(
            'id' => 100,
            'name' => 'Artichoke'
        ));

    });

