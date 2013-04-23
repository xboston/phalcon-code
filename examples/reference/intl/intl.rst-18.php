
    <?php

    $locale = Locale::acceptFromHttp($_SERVER["HTTP_ACCEPT_LANGUAGE"]);

    // Локалью может быть что-то вроде "ru_RU" или "ru"
    echo $locale;

