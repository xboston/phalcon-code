<?php

/**
 * Простая аннотация
 *
 * @SomeAnnotation
 */

/**
 * Аннотация с параметрами
 *
 * @SomeAnnotation("hello", "world", 1, 2, 3, false, true)
 */

/**
 * Аннотация с именованными параметрами
 *
 * @SomeAnnotation(first="hello", second="world", third=1)
 * @SomeAnnotation(first: "hello", second: "world", third: 1)
 */

/**
 * Передача массива
 *
 * @SomeAnnotation([1, 2, 3, 4])
 * @SomeAnnotation({1, 2, 3, 4})
 */

/**
 * Передача хеша в качестве параметра
 *
 * @SomeAnnotation({first=1, second=2, third=3})
 * @SomeAnnotation({'first'=1, 'second'=2, 'third'=3})
 * @SomeAnnotation({'first': 1, 'second': 2, 'third': 3})
 * @SomeAnnotation(['first': 1, 'second': 2, 'third': 3])
 */

/**
 * Вложенные массивы/хеши
 *
 * @SomeAnnotation({"name"="SomeName", "other"={
 *        "foo1": "bar1", "foo2": "bar2", {1, 2, 3},
 * }})
 */

/**
 * Вложенные аннотации
 *
 * @SomeAnnotation(first=@AnotherAnnotation(1, 2, 3))
 */

