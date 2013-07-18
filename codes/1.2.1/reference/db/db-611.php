<?php

// Get views on the test_db database
$tables = $connection->listViews("test_db");

// Is there a view 'robots' in the database?
$exists = $connection->viewExists("robots");

