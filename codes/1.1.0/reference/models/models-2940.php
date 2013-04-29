<?php

// Send some SQL statements to the database
Robots::find();
Robots::find(array("order" => "name"));
Robots::find(array("limit" => 30));

//Get the generated profiles from the profiler
$profiles = $di->get('profiler')->getProfiles();

foreach ($profiles as $profile) {
   echo "SQL Statement: ", $profile->getSQLStatement(), "\n";
   echo "Start Time: ", $profile->getInitialTime(), "\n";
   echo "Final Time: ", $profile->getFinalTime(), "\n";
   echo "Total Elapsed Time: ", $profile->getTotalElapsedSeconds(), "\n";
}

