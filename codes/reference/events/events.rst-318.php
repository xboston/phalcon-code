
    <?php

    $evManager->attach('db', new DbListener(), 150); // Высокий приоритет
    $evManager->attach('db', new DbListener(), 100); // Нормальный приоитет
    $evManager->attach('db', new DbListener(), 50); // Низкий приоритет


