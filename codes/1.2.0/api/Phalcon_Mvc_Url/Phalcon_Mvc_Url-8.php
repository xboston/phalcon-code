<?php

//Generate a url appending a uri to the base Uri
echo $url->get('products/edit/1');

//Generate a url for a predefined route
echo $url->get(array( 'for' => 'blog-post' , 'title' => 'some-cool-stuff' , 'year' => '2012' ));



