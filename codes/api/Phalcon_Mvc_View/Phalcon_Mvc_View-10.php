<?php

 //Setting views directory
 $view = new Phalcon\Mvc\View();
 $view->setViewsDir('app/views/');

 $view->start();
 //Shows recent posts view (app/views/posts/recent.phtml)
 $view->render('posts', 'recent');
 $view->finish();

 //Printing views output
 echo $view->getContent();



