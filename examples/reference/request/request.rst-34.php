
    <?php           

    // Ручная фильтрация
    $filter = new Phalcon\Filter();

    $email  = $filter->sanitize($_POST["user_email"], "email");

    // Ручная фильтрация значения
    $filter = new Phalcon\Filter();
    $email  = $filter->sanitize($request->getPost("user_email"), "email");

    // Автоматическая фильтрация значения
    $email = $request->getPost("user_email", "email");

    // Получение значения по умолчанию, если параметр равен NULL
    $email = $request->getPost("user_email", "email", "some@example.com");

    // Получение значения по умолчанию, если параметр равен NULL без использования фильтрации
    $email = $request->getPost("user_email", null, "some@example.com");


