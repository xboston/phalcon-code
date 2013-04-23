
    <?php

    $robots = $this->modelsManager->createBuilder()
        ->from('Robots')
        ->join('RobotsParts')
        ->limit(20)
        ->order('Robots.name')
        ->getQuery()
        ->execute();

