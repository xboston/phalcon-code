<?php

use Phalcon\Assets\FilterInterface;

/**
 * Filters CSS content using YUI
 *
 * @param string $contents
 * @return string
 */
class CssYUICompressor implements FilterInterface
{

    protected $_options;

    /**
     * CssYUICompressor constructor
     *
     * @param array $options
     */
    public function __construct($options)
    {
        $this->_options = $options;
    }

    /**
     * Do the filtering
     *
     * @param string $contents
     * @return string
     */
    public function filter($contents)
    {

        //Write the string contents into a temporal file
        file_put_contents('temp/my-temp-1.css', $contents);

        system(
            $this->_options['java-bin'] .
            ' -jar ' .
            $this->_options['yui'] .
            ' --type css '.
            'temp/my-temp-file-1.css ' .
            $this->_options['extra-options'] .
            ' -o temp/my-temp-file-2.css'
        );

        //Return the contents of file
        return file_get_contents("temp/my-temp-file-2.css");
    }
}

