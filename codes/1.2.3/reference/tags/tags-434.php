<?php

// Generate <img src="/your-app/img/hello.gif">
echo $this->tag->image("img/hello.gif");

// Generate <img alt="alternative text" src="/your-app/img/hello.gif">
echo $this->tag->image(
    array(
       "img/hello.gif",
       "alt" => "alternative text"
    )
);

