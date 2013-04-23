
    <?php

    $profiler = new Phalcon\Db\Profiler();
    
    //Set the connection profiler
    $connection->setProfiler($profiler);
    
    $sql = "SELECT buyer_name, quantity, product_name
    FROM buyers LEFT JOIN products ON
    buyers.pid=products.id";
    
    //Execute a SQL statement
    $connection->query($sql);
    
    //Get the last profile in the profiler
    $profile = $profiler->getLastProfile();
    
    echo "SQL Statement: ", $profile->getSQLStatement(), "\n";
    echo "Start Time: ", $profile->getInitialTime(), "\n";
    echo "Final Time: ", $profile->getFinalTime(), "\n";
    echo "Total Elapsed Time: ", $profile->getTotalElapsedSeconds(), "\n";



