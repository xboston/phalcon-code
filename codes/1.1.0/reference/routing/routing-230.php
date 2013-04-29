<?php

// В качестве первой позиции выступает параметр 'country'
$router->add('/news/{country:[a-z]{2}}/([a-z+])/([a-z\-+])',
    array(
        'section' => 2, // Это уже позиция номер 2
        'article' => 3
    )
);

