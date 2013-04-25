<?php

 $app = new Phalcon\Mvc\Micro();
 $collection = new Phalcon\Mvc\Micro\Collection();

 $collection->setHandler(new PostsController());

 $collection->get('/posts/edit/{id}', 'edit');

 $app->mount($collection);



