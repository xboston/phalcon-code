
    <?php

    //Direct output
    $app->get('/say/hello', function () {
        echo "<h1>Hello! $name</h1>";
    });

    //Requiring another file
    $app->get('/show/results', function () {
        require 'views/results.php';
    });

    //Returning a JSON
    $app->get('/get/some-json', function () {
        echo json_encode(array("some", "important", "data"));
    });

