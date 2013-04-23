
    <?php

    $phql   = "SELECT c.price*0.16 AS taxes, c.* FROM Cars AS c ORDER BY c.name";
    $result = $manager->executeQuery($phql);

