
    <?php

    $url = new Phalcon\Mvc\Url();

    // Указание базового адреса используя $_SERVER["REQUEST_URI"]
    $url->setBaseUri('/invo/index.php?_url=/');

    // Передача URI в $_GET["_url"]
    $url->setBaseUri('/invo/index.php/');

