<?php
/**
 * Работа с валидатором длины строк Phalcon\Validation\Validator\StringLength
 *
 * Валидатор, при возможности, использует расширение mb_string, поддерживая работу с разными кодировками
 * 
 */


/**
 * Работа валидатора идёт через общий объект Phalcon\Validation
 * 
 */
$validation = new Phalcon\Validation();

/**
 * Добавление правил валидации осуществляется методом add
 * 
 * В этом примере добавлен валидатор значения поля name, минимальная длина которого должна быть 5 символов
 * Так же определено сообщение, которое будет выведено при несоответсвии правилу валидации
 */
$validation->add(
    'name' ,
    new Phalcon\Validation\Validator\StringLength(array(
                                                       'min'            => 5 ,
                                                       'messageMinimum' => 'Значение поля name слишком короткое' ,
                                                  ))
);

/**
 * Аналогичный пример, но для проверки на максимальный размер строки в 10 символов
 */
$validation->add(
    'name2' ,
    new Phalcon\Validation\Validator\StringLength(array(
                                                       'max'            => 10 ,
                                                       'messageMaximum' => 'Значение поля name2 слишком длинное'
                                                  ))
);

/**
 * Можно указывать сразу и минимальную и максимальную длину строки
 */
$validation->add(
    'name3' ,
    new Phalcon\Validation\Validator\StringLength(array(
                                                       'min' => 5 ,
                                                       'max' => 10 ,
                                                  ))
);

/**
 * Тексты сообщений при несоответсвии условиям длины строки так же можно указывать для каждого случая
 */
$validation->add(
    'name3' ,
    new Phalcon\Validation\Validator\StringLength(array(
                                                       'min'            => 5 ,
                                                       'max'            => 10 ,
                                                       'messageMinimum' => 'Значение поля name4 слишком короткое' ,
                                                       'messageMaximum' => 'Значение поля name4 слишком длинное'
                                                  ))
);

/**
 * Тестовый набор данных для валидации
 */
$fields = [
    'name'  => 'Привет!' ,
    'name2' => 'тут' ,
    'name3' => 'идёт работа с валидатором' ,
    'name4' => 'длины строк' ,

];

$messages = $validation->validate($fields);

if ( count($messages) ) {

    foreach ( $messages as $message ) {
        echo $message , PHP_EOL;
    }
} else {

    echo "Все строки соответсвуют условиям" , PHP_EOL;
}

/**
 * Результат работы сценария будет примерно таким:
 * - Value of field 'name3' exceeds the maximum 10 characters
 * - Значение поля name4 слишком длинное
 * 
 */