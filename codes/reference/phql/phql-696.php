
    <?php

    $phql = "SELECT * FROM [Update]";
    $result = $manager->executeQuery($phql);

    $phql = "SELECT id, [Like] FROM Posts";
    $result = $manager->executeQuery($phql);

