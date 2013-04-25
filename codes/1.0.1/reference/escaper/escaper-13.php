<?php

    // Заголовок документа с вредоносным кодом
    $maliciousTitle = '</title><script>alert(1)</script>';

    // Вредоносные название CSS класса
    $className = ';`(';

    // Вредоносное название CSS шрифта
    $fontName = 'Verdana"</style>';

    // Вредоносный Javascript текст
    $javascriptText = "';</script>Hello";

    // Создаем компонент экранирования
    $e = new Phalcon\Escaper();

?>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    <title><?php echo $e->escapeHtml($maliciousTitle) ?></title>

    <style type="text/css">
    .<?php echo $e->escapeCss($className) ?> {
        font-family  : "<?php echo $e->escapeCss($fontName) ?>";
        color: red;
    }
    </style>

</head>

<body>

    <div class='<?php echo $e->escapeHtmlAttr($className) ?>'>hello</div>

    <script>var some = '<?php echo $e->escapeJs($javascriptText) ?>'</script>

</body>
</html>

