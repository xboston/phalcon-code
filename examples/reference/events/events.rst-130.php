
    <?php

    // Выполнение SQL запроса
    $connection->execute("SELECT * FROM products p WHERE p.status = 1");

    foreach($dbListener->getProfiler()->getProfiles() as $profile){
        echo "SQL Statement: ", $profile->getSQLStatement(), "\n";
        echo "Start Time: ", $profile->getInitialTime(), "\n"
        echo "Final Time: ", $profile->getFinalTime(), "\n";
        echo "Total Elapsed Time: ", $profile->getTotalElapsedSeconds(), "\n";
    }

