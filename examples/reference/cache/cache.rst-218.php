
    <?php

    if ($cache->exists("someKey")) {
        echo $cache->get("someKey");
    }
    else {
        echo "Данных в кэше не существует!";
    }


