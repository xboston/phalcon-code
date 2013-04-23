
    <?php

    $view = new \Phalcon\Mvc\View();

    //A trailing directory separator is required
    $view->setViewsDir("../app/views/");

    // Передача переменных в представление
    $view->setVar("someProducts", $products);
    $view->setVar("someFeatureEnabled", true);

    // Начало буферизации вывода
    $view->start();

    // Отрисовка всей иерархии представлений, связанной с products/list.phtml
    $view->render("products", "list");

    // Конец буферизации вывода
    $view->finish();

    echo $view->getContent();

