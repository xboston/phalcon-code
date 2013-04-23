<?php

 $phql = "SELECT c.price*0.16 AS taxes, c.* FROM Cars AS c JOIN Brands AS b
          WHERE b.name = :name: ORDER BY c.name";

 $result = $manager->executeQuery($phql, array(
   'name' => 'Lamborghini'
 ));

 foreach ($result as $row) {
   echo "Name: ", $row->cars->name, "\n";
   echo "Price: ", $row->cars->price, "\n";
   echo "Taxes: ", $row->taxes, "\n";
 }



