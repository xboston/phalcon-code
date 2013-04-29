<?php

// Generate 
// <canvas id="canvas1" width="300" class="cnvclass">
// This is my canvas
// </canvas>
echo \Phalcon\Tag::tagHtml("canvas", array("id" => "canvas1", width" => "300", "class" => "cnvclass", false, true, true);
echo "This is my canvas";
echo \Phalcon\Tag:tagHtmlClose("canvas")

