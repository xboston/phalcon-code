<?php

foreach ($this->assets->collection('js') as $resource) {
    echo Phalcon_Tag::javascriptInclude($resource->getPath());
}
