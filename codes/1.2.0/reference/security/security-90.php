<?php echo Tag::form('session/login') ?>

    <!-- login and password inputs ... -->

    <input type="hidden" name="<?php echo $this->security->getTokenKey() ?>"
        value="<?php echo $this->security->getToken() ?>"/>

</form>

