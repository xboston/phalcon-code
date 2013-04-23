
    <?php

    // Сформируется <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Rosario" type="text/css">
    echo \Phalcon\Tag::stylesheetLink("http://fonts.googleapis.com/css?family=Rosario", false);

    // Сформируется <link rel="stylesheet" href="/your-app/css/styles.css" type="text/css">
    echo \Phalcon\Tag::stylesheetLink("css/styles.css");

