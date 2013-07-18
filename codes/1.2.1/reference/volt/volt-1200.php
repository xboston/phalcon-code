<?php

$compiler->addFilter('int', function($resolvedArgs, $exprArgs) {
    return 'intval(' . $resolvedArgs . ')';
});

