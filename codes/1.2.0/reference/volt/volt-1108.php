<?php

$compiler->addFunction('repeat', function($resolvedArgs, $exprArgs) use ($compiler) {

    //Resolve the first argument
    $firstArgument = $compiler->expression($exprArgs[0]['expr']);

    //Checks if the second argument was passed
    if (isset($exprArgs[1])) {
        $secondArgument = $compiler->expression($exprArgs[1]['expr']);
    } else {
        //Use '10' as default
        $secondArgument = '10';
    }

    return 'str_repeat('.$firstArgument.', '.$secondArgument.')';
});

