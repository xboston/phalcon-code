<?php

class MyTags extends \Phalcon\Tag
{

    /**
     * Generates a widget to show a HTML5 audio tag
     *
     * @param array
     * @return string
     */
    static public function audioField($parameters)
    {

        // Converting parameters to array if it is not
        if (!is_array($parameters)) {
            $parameters = array($parameters);
        }

        // Determining attributes "id" and "name"
        if (!isset($parameters[0])) {
            $parameters[0] = $parameters["id"];
        }

        $id = $parameters[0];
        if (!isset($parameters["name"])) {
            $parameters["name"] = $id;
        } else {
            if (!$parameters["name"]) {
                $parameters["name"] = $id;
            }
        }

        // Determining widget value,
        // \Phalcon\Tag::setDefault() allows to set the widget value
        if (isset($parameters["value"])) {
            $value = $parameters["value"];
            unset($parameters["value"]);
        } else {
            $value = self::getValue($id);
        }

        // Generate the tag code
        $code = '<audio id="'.$id.'" value="'.$value.'" ';
        foreach ($parameters as $key => $attributeValue) {
            if (!is_integer($key)) {
                $code.= $key.'="'.$attributeValue.'" ';
            }
        }
        $code.=" />";

        return $code;
    }

}

