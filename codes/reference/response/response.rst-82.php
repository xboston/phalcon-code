
    <?php

    // Переадресация на корневой URI
    $response->redirect();

    // Перенаправление на внутренний URI
    $response->redirect("posts/index");

    // Перенаправление на внешнюю ссылку
    $response->redirect("http://en.wikipedia.org", true);

    // Перенаправление со специальным HTTP кодом
    $response->redirect("http://www.example.com/new-location", true, 301);

