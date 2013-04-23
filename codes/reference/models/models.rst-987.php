
    <?php

    use Phalcon\Mvc\Model\Resultset;

    $robots = Robots::find(array(
        'hydration' => Resultset::HYDRATE_ARRAYS
    ));

    foreach ($robots as $robot) {
        echo $robot['year'], PHP_EOL;
    }

