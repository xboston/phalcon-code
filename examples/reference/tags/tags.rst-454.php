
    <?php

    // Сформируется <img src="/your-app/img/hello.gif">
    echo \Phalcon\Tag::image("img/hello.gif");

    // Сформируется <img alt="alternative text" src="/your-app/img/hello.gif">
    echo \Phalcon\Tag::image(
        array(
           "img/hello.gif",
           "alt" => "alternative text"
        )
    );

