<?php

// Query some post
$post = Post::findFirst();

// Get comments related to a post, also cache it
$comments = $post->getComments(
    array(
         "cache" => array( "key" => "my-key" )
    )
);

// Get comments related to a post, setting lifetime
$comments = $post->getComments(
    array(
         "cache" => array( "key" => "my-key" , "lifetime" => 3600 )
    )
);

