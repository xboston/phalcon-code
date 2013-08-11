<?php echo $this->tag->form('session/start') ?>

    <label for="email">Username/Email</label>
    <?php echo $this->tag->textField(array("email", "size" => "30")) ?>

    <label for="password">Password</label>
    <?php echo $this->tag->passwordField(array("password", "size" => "30")) ?>

    <?php echo $this->tag->submitButton(array('Login')) ?>

</form>

