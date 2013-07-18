<?php

 $sql = $dialect->sharedLock('SELECT * FROM robots');
 echo $sql; // SELECT * FROM robots LOCK IN SHARE MODE




