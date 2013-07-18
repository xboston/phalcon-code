<?php

$sql = $dialect->forUpdate('SELECT * FROM robots');
echo $sql; // SELECT * FROM robots FOR UPDATE




