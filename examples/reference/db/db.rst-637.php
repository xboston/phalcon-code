
    <?php

    // Drop table robot from active database
    $connection->dropTable("robots");

    //Drop table robot from database "machines"
    $connection->dropTable("robots", "machines");

