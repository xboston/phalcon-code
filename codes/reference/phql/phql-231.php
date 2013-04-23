
    <?php

    foreach ($result as $row) {
        echo "Name: ", $row->cars->name, "\n";
        echo "Price: ", $row->cars->price, "\n";
        echo "Taxes: ", $row->taxes, "\n";
    }

