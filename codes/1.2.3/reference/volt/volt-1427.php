<?php

//Create a compiler
$compiler = new \Phalcon\Mvc\View\Engine\Volt\Compiler();

//Optionally add some options
$compiler->setOptions(array(
    //...
));

//Compile a template string returning PHP code
echo $compiler->compileString('{{ "hello" }}');

//Compile a template in a file specifying the destination file
$compiler->compileFile('layouts/main.volt', 'cache/layouts/main.volt.php');

//Compile a template in a file based on the options passed to the compiler
$compiler->compile('layouts/main.volt');

//Require the compiled templated (optional)
require $compiler->getCompiledTemplatePath();

