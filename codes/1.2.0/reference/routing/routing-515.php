<?php

// matches "/system/admin/a/edit/7001"
$router->add(
    "/system/:controller/a/:action/:params" ,
    array(
         "controller" => 1 ,
         "action"     => 2 ,
         "params"     => 3
    )
);

// matches "/es/news"
$router->add(
    "/([a-z]{2})/:controller" ,
    array(
         "controller" => 2 ,
         "action"     => "index" ,
         "language"   => 1
    )
);

// matches "/es/news"
$router->add(
    "/{language:[a-z]{2}}/:controller" ,
    array(
         "controller" => 2 ,
         "action"     => "index"
    )
);

// matches "/admin/posts/edit/100"
$router->add(
    "/admin/:controller/:action/:int" ,
    array(
         "controller" => 1 ,
         "action"     => 2 ,
         "id"         => 3
    )
);

// matches "/posts/2010/02/some-cool-content"
$router->add(
    "/posts/([0-9]{4})/([0-9]{2})/([a-z\-]+)" ,
    array(
         "controller" => "posts" ,
         "action"     => "show" ,
         "year"       => 1 ,
         "month"      => 2 ,
         "title"      => 4
    )
);

// matches "/manual/en/translate.adapter.html"
$router->add(
    "/manual/([a-z]{2})/([a-z\.]+)\.html" ,
    array(
         "controller" => "manual" ,
         "action"     => "show" ,
         "language"   => 1 ,
         "file"       => 2
    )
);

// matches /feed/fr/le-robots-hot-news.atom
$router->add(
    "/feed/{lang:[a-z]+}/{blog:[a-z\-]+}\.{type:[a-z\-]+}" ,
    "Feed::get"
);

// matches /api/v1/users/peter.json
$router->add(
    '/api/(v1|v2)/{method:[a-z]+}/{param:[a-z]+}\.(json|xml)' ,
    array(
         'controller' => 'api' ,
         'version'    => 1 ,
         'format'     => 4
    )
);

