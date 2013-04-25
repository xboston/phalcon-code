<h1>Контакты</h1>

<form method="post">

    <p>
        <label>Имя</label>
        <?php echo $form->render("name") ?>
    </p>

    <p>
        <label>Телефон</label>
        <?php echo $form->render("telephone") ?>
    </p>

    <p>
        <label>Тип телефона</label>
        <?php echo $form->render("telephoneType") ?>
    </p>

    <p>
        <input type="submit" value="Сохранить" />
    </p>

</form>

