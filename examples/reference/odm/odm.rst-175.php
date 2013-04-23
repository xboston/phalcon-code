
    <?php

    // What's the first robot in robots collection?
    $robot = Robots::findFirst();
    echo "The robot name is ", $robot->name, "\n";

    // What's the first mechanical robot in robots collection?
    $robot = Robots::findFirst(array(
        array("type" => "mechanical")
    ));
    echo "The first mechanical robot name is ", $robot->name, "\n";

