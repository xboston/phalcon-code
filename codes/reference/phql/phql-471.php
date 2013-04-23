
    <?php

    // Изменение одного столбца
    $phql = "UPDATE Cars SET price = 15000.00 WHERE id = 101";
    $manager->executeQuery($phql);

    // Изменение нескольких столбцов
    $phql = "UPDATE Cars SET price = 15000.00, type = 'Sedan' WHERE id = 101";
    $manager->executeQuery($phql);

    // Изменение нескольких строк
    $phql = "UPDATE Cars SET price = 7000.00, type = 'Sedan' WHERE brands_id > 5";
    $manager->executeQuery($phql);

    // Использование плейсхолдеров
    $phql = "UPDATE Cars SET price = ?0, type = ?1 WHERE brands_id > ?2";
    $manager->executeQuery($phql, array(
        0 => 7000.00,
        1 => 'Sedan',
        2 => 5
    ));

