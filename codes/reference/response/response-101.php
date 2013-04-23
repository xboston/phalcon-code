
    <?php

    // Переадресация по именованному правилу роутинга
    $response->redirect(array(
        "for" => "index-lang",
        "lang" => "jp",
        "controller" => "index"
    ));

