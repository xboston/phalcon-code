<?php

$config = new Phalcon\Config\Adapter\Json("path/config.json");
echo $config->phalcon->baseuri;
echo $config->models->metadata;



