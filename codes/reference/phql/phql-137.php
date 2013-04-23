
    <?php

    $query = $manager->createQuery("SELECT * FROM Cars ORDER BY Cars.name");
    $query = $manager->createQuery("SELECT Cars.name FROM Cars ORDER BY Cars.name");

