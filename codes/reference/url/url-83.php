
    <?php

    $url = new Phalcon\Mvc\Url();

    // Указание базового адреса из $_GET["_url"]
    $url->setBaseUri('/invo/index.php?_url=/');

    // Получится: /invo/index.php?_url=/products/save
    echo $url->get("products/save");

