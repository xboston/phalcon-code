
    <?php

    // Настройка компонента представления
    $di->set('view', function() {

        $view = new \Phalcon\Mvc\View();

        // A trailing directory separator is required
        $view->setViewsDir('../app/views/');

        $view->registerEngines(array(
            ".my-html" => 'MyTemplateAdapter'
        ));

        return $view;

    }, true);

