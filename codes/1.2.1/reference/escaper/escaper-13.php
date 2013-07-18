<?php

    //Document title with malicious extra HTML tags
    $maliciousTitle = '</title><script>alert(1)</script>';

    //Malicious CSS class name
    $className = ';`(';

    //Malicious CSS font name
    $fontName = 'Verdana"</style>';

    //Malicious Javascript text
    $javascriptText = "';</script>Hello";

    //Create an escaper
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

