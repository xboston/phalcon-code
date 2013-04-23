<?php

class MyTags extends \Phalcon\Tag
{

    /**
    * Соаздёт виджет вывода тега HTML5 audio
    *
    * @param array
    * @return string
    */
    static public function audioField($parameters)
    {

        // Приведение к массиву
        if (!is_array($parameters)) {
            $parameters = array($parameters);
        }

        // Определение аттрибутов "id" и "name"
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

        // Определение значения элемента
        // \Phalcon\Tag::setDefault() позволяет установить значение элемента
        if (isset($parameters["value"])) {
            $value = $parameters["value"];
            unset($parameters["value"]);
        } else {
            $value = self::getValue($id);
        }

        // Генерация кода
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

