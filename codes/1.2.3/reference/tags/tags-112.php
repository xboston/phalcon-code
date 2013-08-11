<!-- Sending the form by method POST -->
<?= $this->tag->form("products/search") ?>
    <label for="q">Search:</label>
    <?= $this->tag->textField("q") ?>
    <?= $this->tag->submitButton("Search") ?>
</form>

<!-- Specyfing another method or attributes for the FORM tag -->
<?= $this->tag->form(array("products/search", "method" => "get")); ?>
    <label for="q">Search:</label>
    <?= $this->tag->textField("q"); ?>
    <?= $this->tag->submitButton("Search"); ?>
</form>

