<?php

use Phalcon\Mvc\Micro , Phalcon\Db\Adapter\Pdo\Mysql as MysqlAdapter;

$app = new Micro();

//Setup the database service
$app['db'] = function () {
    return new MysqlAdapter(array(
                                 "host"     => "localhost" ,
                                 "username" => "root" ,
                                 "password" => "secret" ,
                                 "dbname"   => "test_db"
                            ));
};

$app->get(
    '/blog' ,
    function () use ($app) {
        $news = $app['db']->query('SELECT * FROM news');
        foreach ( $news as $new ) {
            echo $new->title;
        }
    }
);

