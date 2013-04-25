<?php

class MyTranslateAdapter implements Phalcon\Translate\AdapterInterface
{

    /**
     * Adapter constructor
     *
     * @param array $data
     */
    public function __construct($options);

    /**
     * Возвращает перевод строки по ключу
     *
     * @param   string $translateKey
     * @param   array $placeholders
     * @return  string
     */
    public function _($translateKey, $placeholders=null);

    /**
     * Возвращает перевод, связанный с заданным ключом
     *
     * @param   string $index
     * @param   array $placeholders
     * @return  string
     */
    public function query($index, $placeholders=null);

    /**
     * Проверяет существование перевода ключа во внутреннем массиве
     *
     * @param   string $index
     * @return  bool
     */
    public function exists($index);

}

