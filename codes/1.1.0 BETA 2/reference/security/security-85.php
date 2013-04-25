<?php echo Tag::form('session/login') ?>

    <!-- поля логина и пароля ... -->

    <input type="hidden" name="<?php echo $this->security->getTokenKey() ?>"
        value="<?php echo $this->security->getToken() ?>"/>

</form>

