<?php

// Generate
// <canvas id="canvas1" width="300" class="cnvclass">
// This is my canvas
// </canvas>
echo $this->tag->tagHtml("canvas", array("id" => "canvas1", "width" => "300", "class" => "cnvclass"), false, true, true);
echo "This is my canvas";
echo $this->tag->tagHtmlClose("canvas");

