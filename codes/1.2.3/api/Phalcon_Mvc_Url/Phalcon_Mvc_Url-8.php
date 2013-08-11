<?php

 //Generate a URL appending the URI to the base URI
 echo $url->get('products/edit/1');

 //Generate a URL for a predefined route
 echo $url->get(array('for' => 'blog-post', 'title' => 'some-cool-stuff', 'year' => '2012'));



