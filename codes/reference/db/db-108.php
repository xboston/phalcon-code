
    <?php

    $sql = "SELECT id, name FROM robots ORDER BY name";

    // Send a SQL statement to the database system
    $result = $connection->query($sql);

    // Print each robot name
    while ($robot = $result->fetch()) {
       echo $robot["name"];
    }

    // Get all rows in an array
    $robots = $connection->fetchAll($sql);
    foreach ($robots as $robot) {
       echo $robot["name"];
    }

    // Get only the first row
    $robot = $connection->fetchOne($sql);

