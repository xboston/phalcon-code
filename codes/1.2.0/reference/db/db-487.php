<?php

// Get tables on the test_db database
$tables = $connection->listTables("test_db");

// Is there a table robots in the database?
$exists = $connection->tableExists("robots");

// Get name, data types and special features of robots fields
$fields = $connection->describeColumns("robots");
foreach ( $fields as $field ) {
    echo "Column Type: " , $field["Type"];
}

// Get indexes on the robots table
$indexes = $connection->describeIndexes("robots");
foreach ( $indexes as $index ) {
    print_r($index->getColumns());
}

// Get foreign keys on the robots table
$references = $connection->describeReferences("robots");
foreach ( $references as $reference ) {
    // Print referenced columns
    print_r($reference->getReferencedColumns());
}

