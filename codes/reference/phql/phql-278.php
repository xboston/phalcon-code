
    <?php

    $phql = "SELECT Cars.*, Brands.* FROM Cars INNER JOIN Brands ON Brands.id = Cars.brands_id";
    $rows = $manager->executeQuery($phql);

