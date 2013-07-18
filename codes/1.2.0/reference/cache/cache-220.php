<?php

if ( $cache->exists("someKey") ) {
    echo $cache->get("someKey");
} else {
    echo "Cache does not exists!";
}


