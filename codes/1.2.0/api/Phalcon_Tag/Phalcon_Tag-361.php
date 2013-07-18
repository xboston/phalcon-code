<?php

echo Phalcon\Tag::form("posts/save");
echo Phalcon\Tag::form(array( "posts/save" , "method" => "post" ));

