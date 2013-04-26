<?php

$compiler = new \Phalcon\Mvc\View\Engine\Volt\Compiler();
$compiler->compile('views/partials/header.volt');
require $compiler->getCompiledTemplatePath();



