<?php

$connection->execute("DELETE FROM robots");
echo $connection->affectedRows() , ' were deleted';




