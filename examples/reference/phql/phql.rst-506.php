
    <?php

    $phql = "UPDATE Cars SET price = 15000.00 WHERE id > 101";
    $success = $manager->executeQuery($phql);

