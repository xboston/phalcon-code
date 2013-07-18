<?php

//Get some CSS collection
$css = $this->assets->get('head');

//Add/Enable the YUI compressor filter in the collection
$css->addFilter(new CssYUICompressor(array(
     'java-bin' => '/usr/local/bin/java',
     'yui' => '/some/path/yuicompressor-x.y.z.jar',
     'extra-options' => '--charset utf8'
)));

