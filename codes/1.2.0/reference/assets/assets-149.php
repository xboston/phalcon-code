<?php

foreach ($this->assets->collection('js') as $resource) {
    echo \Phalcon\Tag::javascriptInclude($resource->getPath());
}
