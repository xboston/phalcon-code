
    <?php

    //Set a route with the name "show-post"
    $app->get('/blog/{year}/{title}', function ($year, $title) use ($app) {

        //.. show the post here

    })->setName('show-post');

    //produce an URL somewhere
    $app->get('/', function() use ($app) {

        echo '<a href="', $app->url->get(array(
            'for' => 'show-post',
            'title' => 'php-is-a-great-framework',
            'year' => 2012
        )), '">Show the post</a>';

    });


