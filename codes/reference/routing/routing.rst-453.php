
    <?php

    // returns /posts/2012/phalcon-1-0-released
    echo $url->get(array(
        "for" => "show-posts",
        "year" => "2012", "title" =>
        "phalcon-1-0-released"
    ));

