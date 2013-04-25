<?php

$escaper = new Phalcon\Escaper();
$escaped = $escaper->escapeCss("font-family: <Verdana>");
echo $escaped; // font\2D family\3A \20 \3C Verdana\3E



