<h1>Contacts</h1>

<form method="post">

    <p>
        <label>Name</label>
        <?php echo $form->render("name") ?>
    </p>

    <p>
        <label>Telephone</label>
        <?php echo $form->render("telephone") ?>
    </p>

    <p>
        <label>Type</label>
        <?php echo $form->render("telephoneType") ?>
    </p>

    <p>
        <input type="submit" value="Save" />
    </p>

</form>

