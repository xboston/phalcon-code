
    <?php

    $compiler->addFunction('repeat', function($resolvedArgs, $exprArgs) use ($compiler) {

        // Получение первого параметра
        $firstArgument = $compiler->expression($exprArgs[0]['expr']);

        // Проверка, что второй параметр был передан
        if (isset($exprArgs[1])) {
            $secondArgument = $compiler->expression($exprArgs[1]['expr']);
        } else {
            // По умолчанию используется '10'
            $secondArgument = '10';
        }

        return 'str_repeat('.$firstArgument.', '.$secondArgument.')';
    });

