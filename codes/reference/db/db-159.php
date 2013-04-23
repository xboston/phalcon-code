
    <?php

    $sql = "SELECT id, name FROM robots";
    $result = $connection->query($sql);

    // Traverse the resultset
    while ($robot = $result->fetch()) {
       echo $robot["name"];
    }

    // Seek to the third row
    $result->seek(2);
    $robot = $result->fetch();

    // Count the resultset
    echo $result->numRows();

