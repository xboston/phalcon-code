
    <?php

    $compiler->addFunction('include_text', function($resolvedArgs, $exprArgs) {
        if (function_exists('mb_stripos')) {
            return 'mb_stripos('.$resolvedArgs.')';
        } else {
            return 'stripos('.$resolvedArgs.')';
        }
    });

